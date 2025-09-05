<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Zestaw danych identyfikacyjnych dla osoby fizycznej zagranicznej
 */
class TIdentyfikatorOsobyFizycznejZagranicznej
{
    /**
     * Imię pierwsze [First name]
     * @var string|null
     */
    public string|null $imiePierwsze;
    /**
     * Nazwisko [Family name]
     * @var string|null
     */
    public string|null $nazwisko;
    /**
     * Data urodzenia [Date of Birth]
     * @var string|null
     */
    public string|null $dataUrodzenia;
    /**
     * Miejsce urodzenia [Place of Birth]
     * @var string|null
     */
    public string|null $miejsceUrodzenia;
    /**
     * Imię ojca [Father’s name]
     * @var string|null
     */
    public string|null $imieOjca;
    /**
     * Imię matki [Mother’s name]
     * @var string|null
     */
    public string|null $imieMatki;
    /**
     * Identyfikator podatkowy NIP [Tax Identification Number (NIP)]
     * @var string|null
     */
    public string|null $nIP;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TIdentyfikatorOsobyFizycznejZagranicznej',
            'xmlNamespace' => 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "ImiePierwsze",
                    'type' => "etd:TImie",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "Nazwisko",
                    'type' => "etd:TNazwisko",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "DataUrodzenia",
                    'type' => "etd:TData",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "MiejsceUrodzenia",
                    'type' => "etd:TMiejscowosc",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "ImieOjca",
                    'type' => "etd:TImie",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "ImieMatki",
                    'type' => "etd:TImie",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "NIP",
                    'type' => "etd:TNrNIP",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
            ],
            'attributes' => [
            ],
        ];
    }
}