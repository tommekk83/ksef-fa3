<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Serializer;

use DOMDocument;
use DOMElement;

final class XmlSerializer
{
    public function createDocument(string $rootElement, object $rootModel): DOMDocument
    {
        $doc = new DOMDocument('1.0', 'UTF-8');
        $doc->formatOutput = false;
        $doc->preserveWhiteSpace = false;
        $schema = $rootModel::schema();
        $ns = $schema['xmlNamespace'] ?? '';
        $root = $ns ? $doc->createElementNS($ns, $rootElement) : $doc->createElement($rootElement);
        $doc->appendChild($root);
        $this->writeModel($doc, $root, $rootModel, $ns);
        return $doc;
    }

    private function writeModel(DOMDocument $doc, DOMElement $el, object $model, string $defaultNs = ''): void
    {
        $schema = $model::schema();
        $modelNs = $schema['xmlNamespace'] ?? $defaultNs;
        foreach (($schema['attributes'] ?? []) as $ad) {
            $an = $ad['name'];
            $pn = $this->propName($an);
            $fixed = $ad['fixed'] ?? null;
            $val = $fixed ?? ($model->$pn ?? null);
            if ($val === null) continue;
            if ($val instanceof \UnitEnum) $val = $val->value;
            $el->setAttribute($an, strval($val));
        }
        if (($schema['content'] ?? 'complex') === 'simple') {
            $val = $model->value ?? null;
            if ($val instanceof \UnitEnum) $val = $val->value;
            if ($val !== null) $el->nodeValue = strval($val);
            return;
        }
        foreach (($schema['elements'] ?? []) as $ed) {
            $en = $ed['name'];
            $pn = $this->propName($en);
            $val = $model->$pn ?? null;
            if ($val === null) continue;
            $childNs = $ed['ns'] ?? $modelNs;
            if (is_array($val)) foreach ($val as $item) $this->writeChild($doc, $el, $en, $item, $childNs);
            else $this->writeChild($doc, $el, $en, $val, $childNs);
        }
    }

    private function writeChild(DOMDocument $doc, DOMElement $parent, string $name, $value, string $ns = ''): void
    {
        $c = $ns ? $doc->createElementNS($ns, $name) : $doc->createElement($name);
        if (is_object($value) && method_exists($value, 'schema')) {
            $this->writeModel($doc, $c, $value, $ns);
        } else {
            if ($value instanceof \UnitEnum) $value = $value->value;
            $c->nodeValue = strval($value);
        }
        $parent->appendChild($c);
    }

    private function propName(string $xmlName): string
    {
        $p = preg_split('/[^A-Za-z0-9]+/', $xmlName);
        $p = array_values(array_filter($p, fn($x) => $x !== ''));
        if (empty($p)) return $xmlName;
        $cc = $p[0];
        $cc = lcfirst($cc);
        for ($i = 1; $i < count($p); $i++) $cc .= $p[$i];
        $cc = preg_replace('/[^A-Za-z0-9_]/', '_', $cc);
        if (preg_match('/^[0-9]/', $cc)) $cc = '_' . $cc;
        $res = ['class', 'function', 'namespace', 'trait', 'enum', 'static', 'public', 'private', 'protected', 'switch', 'match', 'list', 'new', 'unset', 'isset', 'empty', 'default', 'case', 'return', 'yield', 'true', 'false', 'null', 'readonly', 'implements', 'extends', 'use', 'parent', 'self'];
        if (in_array(strtolower($cc), $res, true)) $cc .= '_';
        return $cc;
    }
}