<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TKodWaluty;
use Intermedia\Ksef\Fa3\Enums\TWybor1;

class WarunkiTransakcjiType
{
    /** @var UmowyType[] */
    public array $umowy;
    /** @var ZamowieniaType[] */
    public array $zamowienia;
    /**
     * Numery partii towaru
     * @var string[]
     */
    public array $nrPartiiTowaru;
    /**
     * Warunki dostawy towarów - w przypadku istnienia pomiędzy stronami transakcji, umowy określającej warunki dostawy tzw. Incoterms
     * @var string|null
     */
    public string|null $warunkiDostawy;
    /**
     * Kurs umowny - w przypadkach, gdy na fakturze znajduje się informacja o kursie, po którym zostały przeliczone kwoty wykazane na fakturze w złotych. Nie dotyczy przypadków, o których mowa w dziale VI ustawy
     * @var string|null
     */
    public string|null $kursUmowny;
    /**
     * Waluta umowna - kod waluty (ISO-4217) w przypadkach gdy na fakturze znajduje się informacja o kursie, po którym zostały przeliczone kwoty wykazane na fakturze w złotych. Nie dotyczy przypadków, o których mowa w dziale VI ustawy
     * @var TKodWaluty|null
     */
    public TKodWaluty|null $walutaUmowna;
    /** @var TransportType[] */
    public array $transport;
    /**
     * Wartość "1" oznacza dostawę dokonaną przez podmiot, o którym mowa w art. 22 ust. 2d ustawy. Pole dotyczy przypadku, w którym podmiot uczestniczy w transakcji łańcuchowej innej niż procedura trójstronna uproszczona, o której mowa w art. 135 ust. 1 pkt 4 ustawy
     * @var TWybor1|null
     */
    public TWybor1|null $podmiotPosredniczacy;
    public static function schema(): array
    {
        return [
            'xmlName' => 'WarunkiTransakcjiType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "Umowy",
                    'type' => "tns:UmowyType",
                    'minOccurs' => 0,
                    'maxOccurs' => "100",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Zamowienia",
                    'type' => "tns:ZamowieniaType",
                    'minOccurs' => 0,
                    'maxOccurs' => "100",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrPartiiTowaru",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1000",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "WarunkiDostawy",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "KursUmowny",
                    'type' => "tns:TIlosci",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "WalutaUmowna",
                    'type' => "tns:TKodWaluty",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Transport",
                    'type' => "tns:TransportType",
                    'minOccurs' => 0,
                    'maxOccurs' => "20",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "PodmiotPosredniczacy",
                    'type' => "etd:TWybor1",
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