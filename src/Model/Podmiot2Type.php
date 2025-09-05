<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\GV;
use Intermedia\Ksef\Fa3\Enums\JST;

class Podmiot2Type
{
    /**
     * Numer EORI nabywcy towarów
     * @var string|null
     */
    public string|null $nrEORI;
    /**
     * Dane identyfikujące nabywcę
     * @var TPodmiot2|null
     */
    public TPodmiot2|null $daneIdentyfikacyjne;
    /**
     * Adres nabywcy. Pola opcjonalne dla przypadków określonych w art. 106e ust. 5 pkt 3 ustawy
     * @var TAdres|null
     */
    public TAdres|null $adres;
    /**
     * Adres korespondencyjny nabywcy
     * @var TAdres|null
     */
    public TAdres|null $adresKoresp;
    /**
     * Dane kontaktowe nabywcy
     * @var DaneKontaktoweType[]
     */
    public array $daneKontaktowe;
    /**
     * Numer klienta dla przypadków, w których nabywca posługuje się nim w umowie lub zamówieniu
     * @var string|null
     */
    public string|null $nrKlienta;
    /**
     * Unikalny klucz powiązania danych nabywcy na fakturach korygujących, w przypadku gdy dane nabywcy na fakturze korygującej zmieniły się w stosunku do danych na fakturze korygowanej
     * @var string|null
     */
    public string|null $iDNabywcy;
    /**
     * Znacznik jednostki podrzędnej JST.
     * 
     * Wartość "1" oznacza, że faktura dotyczy jednostki podrzędnej JST. W takim przypadku, aby udostępnić fakturę jednostce podrzędnej JST, należy wypełnić sekcję Podmiot3, w szczególności podać NIP lub ID-Wew i określić rolę jako 8.                  
     * Wartość "2" oznacza, że faktura nie dotyczy jednostki podrzędnej JST
     * @var JST
     */
    public JST $jST = JST::NIE;
    /**
     * Znacznik członka grupy VAT.                                                                Wartość "1" oznacza, że faktura dotyczy członka grupy VAT. W takim przypadku, aby udostępnić fakturę członkowi grupy VAT, należy wypełnić sekcję Podmiot3, w szczególności podać NIP lub ID-Wew i określić rolę jako 10.
     *                                    Wartość "2" oznacza, że faktura nie dotyczy członka grupy VAT
     * @var GV
     */
    public GV $gV = GV::NIE;
    public static function schema(): array
    {
        return [
            'xmlName' => 'Podmiot2Type',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "NrEORI",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "DaneIdentyfikacyjne",
                    'type' => "tns:TPodmiot2",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Adres",
                    'type' => "tns:TAdres",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "AdresKoresp",
                    'type' => "tns:TAdres",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "DaneKontaktowe",
                    'type' => "tns:DaneKontaktoweType2",
                    'minOccurs' => 0,
                    'maxOccurs' => "3",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrKlienta",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "IDNabywcy",
                    'type' => "tns:IDNabywcyType",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "JST",
                    'type' => "tns:JSTType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "GV",
                    'type' => "tns:GVType",
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