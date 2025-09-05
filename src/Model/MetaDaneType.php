<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class MetaDaneType
{
    /**
     * Klucz
     * @var string|null
     */
    public string|null $zKlucz;
    /**
     * Wartość
     * @var string|null
     */
    public string|null $zWartosc;
    public static function schema(): array
    {
        return [
            'xmlName' => 'MetaDaneType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "ZKlucz",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "ZWartosc",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
            ],
            'attributes' => [
            ],
        ];
    }
}