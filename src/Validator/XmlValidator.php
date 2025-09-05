<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Validator;
final class ValidationError
{
    public function __construct(public readonly string $message, public readonly int $level, public readonly int $code, public readonly ?int $line = null, public readonly ?int $column = null, public readonly ?string $file = null)
    {
    }
}

final class ValidationResult
{
    /** @var ValidationError[] */
    public array $errors = [];

    public function __construct(public readonly bool $isValid)
    {
    }

    public function add(ValidationError $e): void
    {
        $this->errors[] = $e;
    }
}

final class XmlValidator
{
    public function __construct(private readonly string $xsdPath)
    {
        if (!is_file($xsdPath)) throw new \InvalidArgumentException('XSD not found: ' . $xsdPath);
    }

    public function validate(\DOMDocument $doc): ValidationResult
    {
        $prev = libxml_use_internal_errors(true);
        libxml_clear_errors();
        $ok = $doc->schemaValidate($this->xsdPath);
        $res = new ValidationResult($ok);
        foreach (libxml_get_errors() as $err) {
            $res->add(new ValidationError(trim((string)$err->message), (int)$err->level, (int)$err->code, $err->line ?: null, $err->column ?: null, $err->file ?: null));
        }
        libxml_clear_errors();
        libxml_use_internal_errors($prev);
        return $res;
    }
}