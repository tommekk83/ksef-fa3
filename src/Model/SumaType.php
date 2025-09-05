<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class SumaType
{
    /**
     * Zawartość pola
     * @var string[]
     */
    public array $sKom;
    public static function schema(): array
    {
        return [
            'xmlName' => 'SumaType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "SKom",
                    'type' => "tns:TZnakowy2",
                    'minOccurs' => 1,
                    'maxOccurs' => "20",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
            ],
            'attributes' => [
            ],
        ];
    }
}