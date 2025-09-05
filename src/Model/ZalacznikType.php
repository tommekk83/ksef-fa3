<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class ZalacznikType
{
    /**
     * Szczegółowe dane załącznika
     * @var BlokDanychType[]
     */
    public array $blokDanych;
    public static function schema(): array
    {
        return [
            'xmlName' => 'ZalacznikType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "BlokDanych",
                    'type' => "tns:BlokDanychType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1000",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
            ],
            'attributes' => [
            ],
        ];
    }
}