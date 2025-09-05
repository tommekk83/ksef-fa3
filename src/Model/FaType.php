<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TKodWaluty;
use Intermedia\Ksef\Fa3\Enums\TRodzajFaktury;
use Intermedia\Ksef\Fa3\Enums\TTypKorekty;
use Intermedia\Ksef\Fa3\Enums\TWybor1;

class FaType
{
    /**
     * Kod waluty (ISO 4217)
     * @var TKodWaluty|null
     */
    public TKodWaluty|null $kodWaluty;
    /**
     * Data wystawienia, z zastrzeżeniem art. 106na ust. 1 ustawy
     * @var string|null
     */
    public string|null $p1;
    /**
     * Miejsce wystawienia faktury
     * @var string|null
     */
    public string|null $p1M;
    /**
     * Kolejny numer faktury, nadany w ramach jednej lub więcej serii, który w sposób jednoznaczny identyfikuje fakturę
     * @var string|null
     */
    public string|null $p2;
    /**
     * Numery dokumentów magazynowych WZ (wydanie na zewnątrz) związane z fakturą
     * @var string[]
     */
    public array $wZ;
    /**
     * Data dokonania lub zakończenia dostawy towarów lub wykonania usługi lub data otrzymania zapłaty, o której mowa w art. 106b ust. 1 pkt 4 ustawy, o ile taka data jest określona i różni się od daty wystawienia faktury. Pole wypełnia się w przypadku, gdy dla wszystkich pozycji faktury data jest wspólna
     * @var string|null
     */
    public string|null $p6;
    /**
     * Okres, którego dotyczy faktura - w przypadkach, o których mowa w art. 19a ust. 3 zdanie pierwsze i ust. 4 oraz ust. 5 pkt 4 ustawy
     * @var OkresFaType|null
     */
    public OkresFaType|null $okresFa;
    /**
     * Suma wartości sprzedaży netto objętej stawką podstawową - aktualnie 23% albo 22%. W przypadku faktur zaliczkowych - wartość zaliczki netto. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p131;
    /**
     * Kwota podatku od sumy wartości sprzedaży netto objętej stawką podstawową - aktualnie 23% albo 22%. W przypadku faktur zaliczkowych - kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p141;
    /**
     * W przypadku gdy faktura jest wystawiona w walucie obcej - kwota podatku od sumy wartości sprzedaży netto objętej stawką podstawową, przeliczona zgodnie z przepisami działu VI w związku z art. 106e ust. 11 ustawy - aktualnie 23% albo 22%. W przypadku faktur zaliczkowych - kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p141W;
    /**
     * Suma wartości sprzedaży netto objętej stawką obniżoną pierwszą - aktualnie 8 % albo 7%. W przypadku faktur zaliczkowych - wartość zaliczki netto. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p132;
    /**
     * Kwota podatku od sumy wartości sprzedaży netto objętej stawką obniżoną pierwszą - aktualnie 8% albo 7%. W przypadku faktur zaliczkowych - kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p142;
    /**
     * W przypadku gdy faktura jest wystawiona w walucie obcej - kwota podatku od sumy wartości sprzedaży netto objętej stawką obniżoną pierwszą, przeliczona zgodnie z przepisami działu VI w związku z art. 106e ust. 11 ustawy - aktualnie 8% albo 7%. W przypadku faktur zaliczkowych - kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p142W;
    /**
     * Suma wartości sprzedaży netto objętej stawką obniżoną drugą - aktualnie 5%. W przypadku faktur zaliczkowych - wartość zaliczki netto. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p133;
    /**
     * Kwota podatku od sumy wartości sprzedaży netto objętej stawką obniżoną drugą - aktualnie 5%. W przypadku faktur zaliczkowych - kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p143;
    /**
     * W przypadku gdy faktura jest wystawiona w walucie obcej - kwota podatku od sumy wartości sprzedaży netto objętej stawką obniżoną drugą, przeliczona zgodnie z przepisami działu VI w związku z art. 106e ust. 11 ustawy - aktualnie 5%. W przypadku faktur zaliczkowych - kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p143W;
    /**
     * Suma wartości sprzedaży netto objętej ryczałtem dla taksówek osobowych. W przypadku faktur zaliczkowych - wartość zaliczki netto. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p134;
    /**
     * Kwota podatku od sumy wartości sprzedaży netto w przypadku ryczałtu dla taksówek osobowych. W przypadku faktur zaliczkowych - kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p144;
    /**
     * W przypadku gdy faktura jest wystawiona w walucie obcej - wysokość ryczałtu dla taksówek osobowych, przeliczona zgodnie z przepisami działu VI w związku z art. 106e ust. 11 ustawy. W przypadku faktur zaliczkowych - kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p144W;
    /**
     * Suma wartości sprzedaży netto w przypadku procedury szczególnej, o której mowa w dziale XII w rozdziale 6a ustawy. W przypadku faktur zaliczkowych - wartość zaliczki netto. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p135;
    /**
     * Kwota podatku od wartości dodanej w przypadku procedury szczególnej, o której mowa w dziale XII w rozdziale 6a ustawy. W przypadku faktur zaliczkowych - kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p145;
    /**
     * Suma wartości sprzedaży objętej stawką 0% z wyłączeniem wewnątrzwspólnotowej dostawy towarów i eksportu. W przypadku faktur zaliczkowych - wartość zaliczki. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p1361;
    /**
     * Suma wartości sprzedaży objętej stawką 0% w przypadku wewnątrzwspólnotowej dostawy towarów. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p1362;
    /**
     * Suma wartości sprzedaży objętej stawką 0% w przypadku eksportu. W przypadku faktur zaliczkowych - wartość zaliczki. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p1363;
    /**
     * Suma wartości sprzedaży zwolnionej od podatku. W przypadku faktur zaliczkowych - wartość zaliczki. W przypadku faktur korygujących - kwota różnicy wartości sprzedaży
     * @var string|null
     */
    public string|null $p137;
    /**
     * Suma wartości sprzedaży w przypadku dostawy towarów oraz świadczenia usług poza terytorium kraju, z wyłączeniem kwot wykazanych w polach P_13_5 i P_13_9. W przypadku faktur zaliczkowych - wartość zaliczki. W przypadku faktur korygujących - kwota różnicy wartości sprzedaży
     * @var string|null
     */
    public string|null $p138;
    /**
     * Suma wartości świadczenia usług, o których mowa w art. 100 ust. 1 pkt 4 ustawy. W przypadku faktur zaliczkowych - wartość zaliczki. W przypadku faktur korygujących - kwota różnicy wartości sprzedaży
     * @var string|null
     */
    public string|null $p139;
    /**
     * Suma wartości sprzedaży w procedurze odwrotnego obciążenia, dla której podatnikiem jest nabywca zgodnie z art. 17 ust. 1 pkt 7 i 8 ustawy oraz innych przypadków odwrotnego obciążenia występujących w obrocie krajowym. W przypadku faktur zaliczkowych - wartość zaliczki. W przypadku faktur korygujących - kwota różnicy, o której mowa w art. 106j ust. 2 pkt 5 ustawy
     * @var string|null
     */
    public string|null $p1310;
    /**
     * Suma wartości sprzedaży w procedurze marży, o której mowa w art. 119 i art. 120 ustawy. W przypadku faktur zaliczkowych - wartość zaliczki. W przypadku faktur korygujących - kwota różnicy wartości sprzedaży
     * @var string|null
     */
    public string|null $p1311;
    /**
     * Kwota należności ogółem. W przypadku faktur zaliczkowych - kwota zapłaty dokumentowana fakturą. W przypadku faktur, o których mowa w art. 106f ust. 3 ustawy - kwota pozostała do zapłaty. W przypadku faktur korygujących - korekta kwoty wynikającej z faktury korygowanej. W przypadku, o którym mowa w art. 106j ust. 3 ustawy - korekta kwot wynikających z faktur korygowanych
     * @var string|null
     */
    public string|null $p15;
    /**
     * Kurs waluty stosowany do wyliczenia kwoty podatku w przypadkach, o których mowa w dziale VI ustawy na fakturach, o których mowa w art. 106b ust. 1 pkt 4 ustawy
     * @var string|null
     */
    public string|null $kursWalutyZ;
    /**
     * Inne adnotacje na fakturze
     * @var AdnotacjeType|null
     */
    public AdnotacjeType|null $adnotacje;
    /**
     * Rodzaj faktury
     * @var TRodzajFaktury|null
     */
    public TRodzajFaktury|null $rodzajFaktury;
    /**
     * Przyczyna korekty dla faktur korygujących
     * @var string|null
     */
    public string|null $przyczynaKorekty;
    /**
     * Typ skutku korekty w ewidencji dla podatku od towarów i usług
     * @var TTypKorekty|null
     */
    public TTypKorekty|null $typKorekty;
    /**
     * Dane faktury korygowanej
     * @var DaneFaKorygowanejType[]
     */
    public array $daneFaKorygowanej;
    /**
     * Dla faktury korygującej, o której mowa w art. 106j ust. 3 ustawy - okres, do którego odnosi się udzielany opust lub udzielana obniżka, w przypadku gdy podatnik udziela opustu lub obniżki ceny w odniesieniu do dostaw towarów lub usług dokonanych lub świadczonych na rzecz jednego odbiorcy w danym okresie
     * @var string|null
     */
    public string|null $okresFaKorygowanej;
    /**
     * Poprawny numer faktury korygowanej w przypadku, gdy przyczyną korekty jest błędny numer faktury korygowanej. W takim przypadku błędny numer faktury należy wskazać w polu NrFaKorygowanej
     * @var string|null
     */
    public string|null $nrFaKorygowany;
    /**
     * W przypadku korekty danych sprzedawcy należy podać pełne dane sprzedawcy występujące na fakturze korygowanej. Pole nie dotyczy przypadku korekty błędnego NIP występującego na fakturze pierwotnej - wówczas wymagana jest korekta faktury do wartości zerowych
     * @var Podmiot1KType|null
     */
    public Podmiot1KType|null $podmiot1K;
    /**
     * W przypadku korekty danych nabywcy występującego jako Podmiot2 lub dodatkowego nabywcy występującego jako Podmiot3 należy podać pełne dane tego podmiotu występujące na fakturze korygowanej. Korekcie nie podlegają błędne numery NIP identyfikujące nabywcę oraz dodatkowego nabywcę - wówczas wymagana jest korekta faktury do wartości zerowych. W przypadku korygowania pozostałych danych nabywcy lub dodatkowego nabywcy wskazany numer identyfikacyjny ma być tożsamy z numerem w części Podmiot2 względnie Podmiot3 faktury korygującej
     * @var Podmiot2KType[]
     */
    public array $podmiot2K;
    /**
     * W przypadku korekt faktur zaliczkowych - kwota zapłaty przed korektą. W przypadku korekt faktur, o których mowa w art. 106f ust. 3 ustawy - kwota pozostała do zapłaty przed korektą
     * @var string|null
     */
    public string|null $p15ZK;
    /**
     * Kurs waluty stosowany do wyliczenia kwoty podatku w przypadkach, o których mowa w dziale VI ustawy przed korektą
     * @var string|null
     */
    public string|null $kursWalutyZK;
    /**
     * Dane dla przypadków faktur dokumentujących otrzymanie więcej niż jednej płatności, o której mowa w art. 106b ust. 1 pkt 4 ustawy. W przypadku, gdy faktura, o której mowa w art. 106f ust. 3 ustawy dokumentuje jednocześnie otrzymanie części zapłaty przed dokonaniem czynności, różnica kwoty w polu P_15 i sumy poszczególnych pól P_15Z stanowi kwotę pozostałą ponad płatności otrzymane przed wykonaniem czynności udokumentowanej fakturą
     * @var ZaliczkaCzesciowaType[]
     */
    public array $zaliczkaCzesciowa;
    /**
     * Faktura, o której mowa w art. 109 ust. 3d ustawy
     * @var TWybor1|null
     */
    public TWybor1|null $fP;
    /**
     * Istniejące powiązania między nabywcą a dokonującym dostawy towarów lub usługodawcą, zgodnie z § 10 ust. 4 pkt 3, z zastrzeżeniem ust. 4b rozporządzenia w sprawie szczegółowego zakresu danych zawartych w deklaracjach podatkowych i w ewidencji w zakresie podatku od towarów i usług
     * @var TWybor1|null
     */
    public TWybor1|null $tP;
    /**
     * Pola przeznaczone dla wykazywania dodatkowych danych na fakturze, w tym wymaganych przepisami prawa, dla których nie przewidziano innych pól/elementów
     * @var TKluczWartosc[]
     */
    public array $dodatkowyOpis;
    /**
     * Numery faktur zaliczkowych lub ich numery KSeF, jeśli zostały wystawione z użyciem KSeF
     * @var FakturaZaliczkowaType[]
     */
    public array $fakturaZaliczkowa;
    /**
     * Informacja dodatkowa niezbędna dla rolników ubiegających się o zwrot podatku akcyzowego zawartego w cenie oleju napędowego
     * @var TWybor1|null
     */
    public TWybor1|null $zwrotAkcyzy;
    /**
     * Szczegółowe pozycje faktury w walucie, w której wystawiono fakturę - węzeł opcjonalny dla faktury zaliczkowej, faktury korygującej fakturę zaliczkową oraz faktur korygujących dotyczących wszystkich dostaw towarów lub usług dokonanych lub świadczonych w danym okresie, o których mowa w art. 106j ust. 3 ustawy, dla których należy podać dane dotyczące opustu lub obniżki w podziale na stawki podatku i procedury w części Fa. W przypadku faktur korygujących, o których mowa w art. 106j ust. 3 ustawy, gdy opust lub obniżka ceny odnosi się do części dostaw towarów lub usług dokonanych lub świadczonych w danym okresie w części FaWiersz należy podać nazwy (rodzaje) towarów lub usług objętych korektą. W przypadku faktur, o których mowa w art. 106f ust. 3 ustawy, należy wykazać pełne wartości zamówienia lub umowy. W przypadku faktur korygujących pozycje faktury (w tym faktur korygujących faktury, o których mowa w art. 106f ust. 3 ustawy, jeśli korekta dotyczy wartości zamówienia) należy wykazać różnice wynikające z korekty poszczególnych pozycji lub dane pozycji korygowanych wg stanu przed korektą i po korekcie jako osobne wiersze. W przypadku faktur korygujących faktury, o których mowa w art. 106f ust. 3 ustawy, jeśli korekta nie dotyczy wartości zamówienia i jednocześnie zmienia wysokość podstawy opodatkowania lub podatku, należy wprowadzić zapis wg stanu przed korektą i zapis wg stanu po korekcie w celu potwierdzenia braku zmiany wartości danej pozycji faktury
     * @var FaWierszType[]
     */
    public array $faWiersz;
    /**
     * Dodatkowe rozliczenia na fakturze
     * @var RozliczenieType|null
     */
    public RozliczenieType|null $rozliczenie;
    /**
     * Warunki płatności
     * @var PlatnoscType|null
     */
    public PlatnoscType|null $platnosc;
    /**
     * Warunki transakcji, o ile występują
     * @var WarunkiTransakcjiType|null
     */
    public WarunkiTransakcjiType|null $warunkiTransakcji;
    /**
     * Zamówienie lub umowa, o których mowa w art. 106f ust. 1 pkt 4 ustawy (dla faktur zaliczkowych), w walucie, w której wystawiono fakturę zaliczkową. W przypadku faktury korygującej fakturę zaliczkową należy wykazać różnice wynikające z korekty poszczególnych pozycji zamówienia lub umowy lub dane pozycji korygowanych wg stanu przed korektą i po korekcie jako osobne wiersze, jeśli korekta dotyczy wartości zamówienia lub umowy. W przypadku faktur korygujących faktury zaliczkowe, jeśli korekta nie dotyczy wartości zamówienia lub umowy i jednocześnie zmienia wysokość podstawy opodatkowania lub podatku, należy wprowadzić zapis wg stanu przed korektą i zapis wg stanu po korekcie w celu potwierdzenia braku zmiany wartości danej pozycji
     * @var ZamowienieType|null
     */
    public ZamowienieType|null $zamowienie;
    public static function schema(): array
    {
        return [
            'xmlName' => 'FaType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "KodWaluty",
                    'type' => "tns:TKodWaluty",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_1",
                    'type' => "tns:TDataT",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_1M",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_2",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "WZ",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1000",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_6",
                    'type' => "tns:TDataT",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "OkresFa",
                    'type' => "tns:OkresFaType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_13_1",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_14_1",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_14_1W",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_13_2",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_14_2",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_14_2W",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_13_3",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_14_3",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_14_3W",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_13_4",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_14_4",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_14_4W",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_13_5",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_14_5",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_13_6_1",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_13_6_2",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_13_6_3",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_13_7",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_13_8",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_13_9",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_13_10",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_13_11",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_15",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "KursWalutyZ",
                    'type' => "tns:TIlosci",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Adnotacje",
                    'type' => "tns:AdnotacjeType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "RodzajFaktury",
                    'type' => "tns:TRodzajFaktury",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "PrzyczynaKorekty",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "TypKorekty",
                    'type' => "tns:TTypKorekty",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "DaneFaKorygowanej",
                    'type' => "tns:DaneFaKorygowanejType",
                    'minOccurs' => 1,
                    'maxOccurs' => "50000",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "OkresFaKorygowanej",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrFaKorygowany",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Podmiot1K",
                    'type' => "tns:Podmiot1KType",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Podmiot2K",
                    'type' => "tns:Podmiot2KType",
                    'minOccurs' => 0,
                    'maxOccurs' => "101",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_15ZK",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "KursWalutyZK",
                    'type' => "tns:TIlosci",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "ZaliczkaCzesciowa",
                    'type' => "tns:ZaliczkaCzesciowaType",
                    'minOccurs' => 0,
                    'maxOccurs' => "31",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "FP",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "TP",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "DodatkowyOpis",
                    'type' => "tns:TKluczWartosc",
                    'minOccurs' => 0,
                    'maxOccurs' => "10000",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "FakturaZaliczkowa",
                    'type' => "tns:FakturaZaliczkowaType",
                    'minOccurs' => 0,
                    'maxOccurs' => "100",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "ZwrotAkcyzy",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "FaWiersz",
                    'type' => "tns:FaWierszType",
                    'minOccurs' => 0,
                    'maxOccurs' => "10000",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Rozliczenie",
                    'type' => "tns:RozliczenieType",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Platnosc",
                    'type' => "tns:PlatnoscType",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "WarunkiTransakcji",
                    'type' => "tns:WarunkiTransakcjiType",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Zamowienie",
                    'type' => "tns:ZamowienieType",
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