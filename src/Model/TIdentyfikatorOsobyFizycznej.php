<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Podstawowy zestaw danych identyfikacyjnych o osobie fizycznej
 */
class TIdentyfikatorOsobyFizycznej
{
    /**
     * Identyfikator podatkowy NIP
     * @var string|null
     */
    public string|null $nIP;
    /**
     * Pierwsze imię
     * @var string|null
     */
    public string|null $imiePierwsze;
    /**
     * Nazwisko
     * @var string|null
     */
    public string|null $nazwisko;
    /**
     * Data urodzenia
     * @var string|null
     */
    public string|null $dataUrodzenia;
    /**
     * Identyfikator podatkowy numer PESEL
     * @var string|null
     */
    public string|null $pESEL;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TIdentyfikatorOsobyFizycznej',
            'xmlNamespace' => 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "NIP",
                    'type' => "etd:TNrNIP",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
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
                    'name' => "PESEL",
                    'type' => "etd:TNrPESEL",
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