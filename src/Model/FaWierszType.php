<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TGTU;
use Intermedia\Ksef\Fa3\Enums\TOznaczenieProcedury;
use Intermedia\Ksef\Fa3\Enums\TStawkaPodatku;
use Intermedia\Ksef\Fa3\Enums\TWybor1;

class FaWierszType
{
    /**
     * Kolejny numer wiersza faktury
     * @var string|null
     */
    public string|null $nrWierszaFa;
    /**
     * Uniwersalny unikalny numer wiersza faktury
     * @var string|null
     */
    public string|null $uUID;
    /**
     * Data dokonania lub zakończenia dostawy towarów lub wykonania usługi lub data otrzymania zapłaty, o której mowa w art. 106b ust. 1 pkt 4 ustawy, o ile taka data jest określona i różni się od daty wystawienia faktury. Pole wypełnia się w przypadku gdy dla poszczególnych pozycji faktury występują różne daty
     * @var string|null
     */
    public string|null $p6A;
    /**
     * Nazwa (rodzaj) towaru lub usługi. Pole opcjonalne wyłącznie dla przypadku określonego w art 106j ust. 3 pkt 2 ustawy (faktura korygująca)
     * @var string|null
     */
    public string|null $p7;
    /**
     * Pole przeznaczone do wpisania wewnętrznego kodu towaru lub usługi nadanego przez podatnika albo dodatkowego opisu
     * @var string|null
     */
    public string|null $indeks;
    /**
     * Globalny numer jednostki handlowej
     * @var string|null
     */
    public string|null $gTIN;
    /**
     * Symbol Polskiej Klasyfikacji Wyrobów i Usług
     * @var string|null
     */
    public string|null $pKWiU;
    /**
     * Symbol Nomenklatury Scalonej
     * @var string|null
     */
    public string|null $cN;
    /**
     * Symbol Polskiej Klasyfikacji Obiektów Budowlanych
     * @var string|null
     */
    public string|null $pKOB;
    /**
     * Miara dostarczonych towarów lub zakres wykonanych usług. Pole opcjonalne dla przypadku określonego w art. 106e ust. 5 pkt 3 ustawy
     * @var string|null
     */
    public string|null $p8A;
    /**
     * Ilość (liczba) dostarczonych towarów lub zakres wykonanych usług. Pole opcjonalne dla przypadku określonego w art. 106e ust. 5 pkt 3 ustawy
     * @var string|null
     */
    public string|null $p8B;
    /**
     * Cena jednostkowa towaru lub usługi bez kwoty podatku (cena jednostkowa netto). Pole opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3 oraz ust. 5 pkt 3 ustawy
     * @var string|null
     */
    public string|null $p9A;
    /**
     * Cena wraz z kwotą podatku (cena jednostkowa brutto), w przypadku zastosowania art. 106e ust. 7 i 8 ustawy
     * @var string|null
     */
    public string|null $p9B;
    /**
     * Kwoty wszelkich opustów lub obniżek cen, w tym w formie rabatu z tytułu wcześniejszej zapłaty, o ile nie zostały one uwzględnione w cenie jednostkowej netto, a w przypadku stosowania art. 106e ust. 7 ustawy w cenie jednostkowej brutto. Pole opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3 oraz ust. 5 pkt 1 ustawy
     * @var string|null
     */
    public string|null $p10;
    /**
     * Wartość dostarczonych towarów lub wykonanych usług, objętych transakcją, bez kwoty podatku (wartość sprzedaży netto). Pole opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3 oraz ust. 5 pkt 3 ustawy
     * @var string|null
     */
    public string|null $p11;
    /**
     * Wartość sprzedaży brutto, w przypadku zastosowania art. 106e ust. 7 i 8 ustawy
     * @var string|null
     */
    public string|null $p11A;
    /**
     * Kwota podatku w przypadku, o którym mowa w art. 106e ust. 10 ustawy
     * @var string|null
     */
    public string|null $p11Vat;
    /**
     * Stawka podatku. Pole opcjonalne dla przypadków określonych w art. 106e ust. 2, 3, ust. 4 pkt 3 i ust. 5 pkt 3 ustawy
     * @var TStawkaPodatku|null
     */
    public TStawkaPodatku|null $p12;
    /**
     * Stawka podatku od wartości dodanej w przypadku, o którym mowa w dziale XII w rozdziale 6a ustawy
     * @var string|null
     */
    public string|null $p12XII;
    /**
     * Znacznik dla towaru lub usługi wymienionych w załączniku nr 15 do ustawy - wartość "1"
     * @var TWybor1|null
     */
    public TWybor1|null $p12Zal15;
    /**
     * Kwota podatku akcyzowego zawarta w cenie towaru
     * @var string|null
     */
    public string|null $kwotaAkcyzy;
    /**
     * Oznaczenie dotyczące dostawy towarów i świadczenia usług
     * @var TGTU|null
     */
    public TGTU|null $gTU;
    /**
     * Oznaczenie dotyczące procedury
     * @var TOznaczenieProcedury|null
     */
    public TOznaczenieProcedury|null $procedura;
    /**
     * Kurs waluty stosowany do wyliczenia kwoty podatku w przypadkach, o których mowa w dziale VI ustawy
     * @var string|null
     */
    public string|null $kursWaluty;
    /**
     * Znacznik stanu przed korektą w przypadku faktury korygującej lub faktury korygującej fakturę wystawioną w związku z art. 106f ust. 3 ustawy, w przypadku gdy korekta dotyczy danych wykazanych w pozycjach faktury i jest dokonywana w sposób polegający na wykazaniu danych przed korektą i po korekcie jako osobnych wierszy z odrębną numeracją oraz w przypadku potwierdzania braku zmiany wartości danej pozycji
     * @var TWybor1|null
     */
    public TWybor1|null $stanPrzed;
    public static function schema(): array
    {
        return [
            'xmlName' => 'FaWierszType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "NrWierszaFa",
                    'type' => "tns:TNaturalny",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "UU_ID",
                    'type' => "tns:TZnakowy50",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_6A",
                    'type' => "tns:TDataT",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_7",
                    'type' => "tns:TZnakowy512",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Indeks",
                    'type' => "tns:TZnakowy50",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "GTIN",
                    'type' => "tns:TZnakowy20",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "PKWiU",
                    'type' => "tns:TZnakowy50",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "CN",
                    'type' => "tns:TZnakowy50",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "PKOB",
                    'type' => "tns:TZnakowy50",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_8A",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_8B",
                    'type' => "tns:TIlosci",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_9A",
                    'type' => "tns:TKwotowy2",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_9B",
                    'type' => "tns:TKwotowy2",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_10",
                    'type' => "tns:TKwotowy2",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_11",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_11A",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_11Vat",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_12",
                    'type' => "tns:TStawkaPodatku",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_12_XII",
                    'type' => "tns:TProcentowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_12_Zal_15",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "KwotaAkcyzy",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "GTU",
                    'type' => "tns:TGTU",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Procedura",
                    'type' => "tns:TOznaczenieProcedury",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "KursWaluty",
                    'type' => "tns:TIlosci",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "StanPrzed",
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