<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class TNaglowekTabeli
{
    /** @var KolType[] */
    public array $kol;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TNaglowekType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "Kol",
                    'type' => "tns:KolType",
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