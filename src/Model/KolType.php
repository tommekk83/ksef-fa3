<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class KolType
{
    /**
     * Zawartość pola
     * @var NKomType|null
     */
    public NKomType|null $nKom;
    /** @var string */
    public string $typ;
    public static function schema(): array
    {
        return [
            'xmlName' => 'KolType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "NKom",
                    'type' => "tns:NKomType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
            ],
            'attributes' => [
                [
                    'name' => "Typ",
                    'type' => null,
                    'use' => "required",
                    'fixed' => null,
                    'default' => null,
                ],
            ],
        ];
    }
}