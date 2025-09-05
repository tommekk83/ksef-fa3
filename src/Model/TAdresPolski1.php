<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TKodKraju;

/**
 * Informacje opisujące adres polski - bez elementu Poczta
 */
class TAdresPolski1
{
    /**
     * Kraj
     * @var TKodKraju|null
     */
    public TKodKraju|null $kodKraju;
    /**
     * Województwo
     * @var string|null
     */
    public string|null $wojewodztwo;
    /**
     * Powiat
     * @var string|null
     */
    public string|null $powiat;
    /**
     * Gmina
     * @var string|null
     */
    public string|null $gmina;
    /**
     * Nazwa ulicy
     * @var string|null
     */
    public string|null $ulica;
    /**
     * Numer budynku
     * @var string|null
     */
    public string|null $nrDomu;
    /**
     * Numer lokalu
     * @var string|null
     */
    public string|null $nrLokalu;
    /**
     * Nazwa miejscowości
     * @var string|null
     */
    public string|null $miejscowosc;
    /**
     * Kod pocztowy
     * @var string|null
     */
    public string|null $kodPocztowy;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TAdresPolski1',
            'xmlNamespace' => 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "KodKraju",
                    'type' => "etd:TKodKraju",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "Wojewodztwo",
                    'type' => "etd:TJednAdmin",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "Powiat",
                    'type' => "etd:TJednAdmin",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "Gmina",
                    'type' => "etd:TJednAdmin",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "Ulica",
                    'type' => "etd:TUlica",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "NrDomu",
                    'type' => "etd:TNrBudynku",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "NrLokalu",
                    'type' => "etd:TNrLokalu",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "Miejscowosc",
                    'type' => "etd:TMiejscowosc",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "KodPocztowy",
                    'type' => "etd:TKodPocztowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
            ],
            'attributes' => [
            ],
        ];
    }
}