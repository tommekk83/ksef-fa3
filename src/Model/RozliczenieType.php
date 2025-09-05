<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class RozliczenieType
{
    /**
     * Obciążenia
     * @var ObciazeniaType[]
     */
    public array $obciazenia;
    /**
     * Suma obciążeń
     * @var string|null
     */
    public string|null $sumaObciazen;
    /**
     * Odliczenia
     * @var OdliczeniaType[]
     */
    public array $odliczenia;
    /**
     * Suma odliczeń
     * @var string|null
     */
    public string|null $sumaOdliczen;
    /**
     * Kwota należności do zapłaty równa polu P_15 powiększonemu o Obciazenia i pomniejszonemu o Odliczenia
     * @var string|null
     */
    public string|null $doZaplaty;
    /**
     * Kwota nadpłacona do rozliczenia/zwrotu
     * @var string|null
     */
    public string|null $doRozliczenia;
    public static function schema(): array
    {
        return [
            'xmlName' => 'RozliczenieType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "Obciazenia",
                    'type' => "tns:ObciazeniaType",
                    'minOccurs' => 0,
                    'maxOccurs' => "100",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "SumaObciazen",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Odliczenia",
                    'type' => "tns:OdliczeniaType",
                    'minOccurs' => 0,
                    'maxOccurs' => "100",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "SumaOdliczen",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "DoZaplaty",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "DoRozliczenia",
                    'type' => "tns:TKwotowy",
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