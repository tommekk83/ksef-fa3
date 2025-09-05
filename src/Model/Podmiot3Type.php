<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TRolaPodmiotu3;
use Intermedia\Ksef\Fa3\Enums\TWybor1;

class Podmiot3Type
{
    /**
     * Unikalny klucz powiązania danych nabywcy na fakturach korygujących, w przypadku gdy dane nabywcy na fakturze korygującej zmieniły się w stosunku do danych na fakturze korygowanej
     * @var string|null
     */
    public string|null $iDNabywcy;
    /**
     * Numer EORI podmiotu trzeciego
     * @var string|null
     */
    public string|null $nrEORI;
    /**
     * Dane identyfikujące podmiot trzeci
     * @var TPodmiot3|null
     */
    public TPodmiot3|null $daneIdentyfikacyjne;
    /**
     * Adres podmiotu trzeciego
     * @var TAdres|null
     */
    public TAdres|null $adres;
    /**
     * Adres korespondencyjny podmiotu trzeciego
     * @var TAdres|null
     */
    public TAdres|null $adresKoresp;
    /**
     * Dane kontaktowe podmiotu trzeciego
     * @var DaneKontaktoweType[]
     */
    public array $daneKontaktowe;
    /**
     * Rola podmiotu
     * @var TRolaPodmiotu3|null
     */
    public TRolaPodmiotu3|null $rola;
    /**
     * Znacznik innego podmiotu: 1 - Inny podmiot
     * @var TWybor1|null
     */
    public TWybor1|null $rolaInna;
    /**
     * Opis roli podmiotu - w przypadku wyboru roli jako Inny podmiot
     * @var string|null
     */
    public string|null $opisRoli;
    /**
     * Udział - procentowy udział dodatkowego nabywcy. Różnica pomiędzy wartością 100% a sumą udziałów dodatkowych nabywców jest udziałem nabywcy wymienionego w części Podmiot2. W przypadku niewypełnienia pola przyjmuje się, że udziały występujących na fakturze nabywców są równe
     * @var string|null
     */
    public string|null $udzial;
    /**
     * Numer klienta dla przypadków, w których podmiot wymieniony jako podmiot trzeci posługuje się nim w umowie lub zamówieniu
     * @var string|null
     */
    public string|null $nrKlienta;
    public static function schema(): array
    {
        return [
            'xmlName' => 'Podmiot3Type',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "IDNabywcy",
                    'type' => "tns:IDNabywcyType2",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrEORI",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "DaneIdentyfikacyjne",
                    'type' => "tns:TPodmiot3",
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
                    'type' => "tns:DaneKontaktoweType3",
                    'minOccurs' => 0,
                    'maxOccurs' => "3",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Rola",
                    'type' => "tns:TRolaPodmiotu3",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "RolaInna",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "OpisRoli",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Udzial",
                    'type' => "tns:TProcentowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrKlienta",
                    'type' => "tns:TZnakowy",
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