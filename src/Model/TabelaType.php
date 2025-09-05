<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class TabelaType
{
    /**
     * Dane opisowe dotyczące tabeli
     * @var TMetaDaneType[]
     */
    public array $tMetaDane;
    /**
     * Opis
     * @var string|null
     */
    public string|null $opis;
    /**
     * Nagłówek tabeli
     * @var TNaglowekTabeli|null
     */
    public TNaglowekTabeli|null $tNaglowek;
    /**
     * Wiersze tabeli
     * @var WierszType[]
     */
    public array $wiersz;
    /**
     * Podsumowania tabeli
     * @var SumaType|null
     */
    public SumaType|null $suma;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TabelaType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "TMetaDane",
                    'type' => "tns:TMetaDaneType",
                    'minOccurs' => 0,
                    'maxOccurs' => "1000",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Opis",
                    'type' => "tns:TZnakowy512",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "TNaglowek",
                    'type' => "tns:TNaglowekType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Wiersz",
                    'type' => "tns:WierszType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1000",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Suma",
                    'type' => "tns:SumaType",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
            ],
            'attributes' => [
            ],
        ];
    }
}