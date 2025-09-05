<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TGTU;
use Intermedia\Ksef\Fa3\Enums\TOznaczenieProceduryZ;
use Intermedia\Ksef\Fa3\Enums\TStawkaPodatku;
use Intermedia\Ksef\Fa3\Enums\TWybor1;

class ZamowienieWierszType
{
    /**
     * Kolejny numer wiersza zamówienia lub umowy
     * @var string|null
     */
    public string|null $nrWierszaZam;
    /**
     * Uniwersalny unikalny numer wiersza zamówienia lub umowy
     * @var string|null
     */
    public string|null $uUIDZ;
    /**
     * Nazwa (rodzaj) towaru lub usługi
     * @var string|null
     */
    public string|null $p7Z;
    /**
     * Pole przeznaczone do wpisania wewnętrznego kodu towaru lub usługi nadanego przez podatnika albo dodatkowego opisu
     * @var string|null
     */
    public string|null $indeksZ;
    /**
     * Globalny numer jednostki handlowej
     * @var string|null
     */
    public string|null $gTINZ;
    /**
     * Symbol Polskiej Klasyfikacji Wyrobów i Usług
     * @var string|null
     */
    public string|null $pKWiUZ;
    /**
     * Symbol Nomenklatury Scalonej
     * @var string|null
     */
    public string|null $cNZ;
    /**
     * Symbol Polskiej Klasyfikacji Obiektów Budowlanych
     * @var string|null
     */
    public string|null $pKOBZ;
    /**
     * Miara zamówionego towaru lub zakres usługi
     * @var string|null
     */
    public string|null $p8AZ;
    /**
     * Ilość zamówionego towaru lub zakres usługi
     * @var string|null
     */
    public string|null $p8BZ;
    /**
     * Cena jednostkowa netto
     * @var string|null
     */
    public string|null $p9AZ;
    /**
     * Wartość zamówionego towaru lub usługi bez kwoty podatku
     * @var string|null
     */
    public string|null $p11NettoZ;
    /**
     * Kwota podatku od zamówionego towaru lub usługi
     * @var string|null
     */
    public string|null $p11VatZ;
    /**
     * Stawka podatku
     * @var TStawkaPodatku|null
     */
    public TStawkaPodatku|null $p12Z;
    /**
     * Stawka podatku od wartości dodanej w przypadku, o którym mowa w dziale XII w rozdziale 6a ustawy
     * @var string|null
     */
    public string|null $p12ZXII;
    /**
     * Znacznik dla towaru lub usługi wymienionych w załączniku nr 15 do ustawy - wartość "1"
     * @var TWybor1|null
     */
    public TWybor1|null $p12ZZal15;
    /**
     * Oznaczenie dotyczące dostawy towarów i świadczenia usług
     * @var TGTU|null
     */
    public TGTU|null $gTUZ;
    /**
     * Oznaczenia dotyczące procedur
     * @var TOznaczenieProceduryZ|null
     */
    public TOznaczenieProceduryZ|null $proceduraZ;
    /**
     * Kwota podatku akcyzowego zawarta w cenie towaru
     * @var string|null
     */
    public string|null $kwotaAkcyzyZ;
    /**
     * Znacznik stanu przed korektą w przypadku faktury korygującej fakturę dokumentującą otrzymanie zapłaty lub jej części przed dokonaniem czynności oraz fakturę wystawioną w związku z art. 106f ust. 4 ustawy (faktura korygująca fakturę zaliczkową), w przypadku gdy korekta dotyczy danych wykazanych w pozycjach zamówienia i jest dokonywana w sposób polegający na wykazaniu danych przed korektą i po korekcie jako osobnych wierszy z odrębną numeracją oraz w przypadku potwierdzania braku zmiany wartości danej pozycji
     * @var TWybor1|null
     */
    public TWybor1|null $stanPrzedZ;
    public static function schema(): array
    {
        return [
            'xmlName' => 'ZamowienieWierszType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "NrWierszaZam",
                    'type' => "tns:TNaturalny",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "UU_IDZ",
                    'type' => "tns:TZnakowy50",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_7Z",
                    'type' => "tns:TZnakowy512",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "IndeksZ",
                    'type' => "tns:TZnakowy50",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "GTINZ",
                    'type' => "tns:TZnakowy20",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "PKWiUZ",
                    'type' => "tns:TZnakowy50",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "CNZ",
                    'type' => "tns:TZnakowy50",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "PKOBZ",
                    'type' => "tns:TZnakowy50",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_8AZ",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_8BZ",
                    'type' => "tns:TIlosci",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_9AZ",
                    'type' => "tns:TKwotowy2",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_11NettoZ",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_11VatZ",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_12Z",
                    'type' => "tns:TStawkaPodatku",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_12Z_XII",
                    'type' => "tns:TProcentowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_12Z_Zal_15",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "GTUZ",
                    'type' => "tns:TGTU",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "ProceduraZ",
                    'type' => "tns:TOznaczenieProceduryZ",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "KwotaAkcyzyZ",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "StanPrzedZ",
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