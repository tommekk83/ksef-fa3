<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class TekstType
{
    /**
     * Opis
     * @var string[]
     */
    public array $akapit;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TekstType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "Akapit",
                    'type' => "tns:TZnakowy512",
                    'minOccurs' => 1,
                    'maxOccurs' => "10",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
            ],
            'attributes' => [
            ],
        ];
    }
}