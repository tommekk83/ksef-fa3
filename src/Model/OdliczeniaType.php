<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class OdliczeniaType
{
    /**
     * Kwota odliczona od kwoty wykazanej w polu P_15
     * @var string|null
     */
    public string|null $kwota;
    /**
     * Powód odliczenia
     * @var string|null
     */
    public string|null $powod;
    public static function schema(): array
    {
        return [
            'xmlName' => 'OdliczeniaType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "Kwota",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Powod",
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