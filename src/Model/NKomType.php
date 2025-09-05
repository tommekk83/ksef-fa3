<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class NKomType
{
    /**
     * Wartość treści elementu (simpleContent).
     * @var string
     */
    public string $value;
    public static function schema(): array
    {
        return [
            'xmlName' => 'NKomType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'simple',
            'base' => null,
            'attributes' => [
            ],
        ];
    }
}