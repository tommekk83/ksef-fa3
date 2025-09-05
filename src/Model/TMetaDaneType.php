<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class TMetaDaneType
{
    /**
     * Klucz
     * @var string|null
     */
    public string|null $tKlucz;
    /**
     * Wartość
     * @var string|null
     */
    public string|null $tWartosc;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TMetaDaneType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "TKlucz",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "TWartosc",
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