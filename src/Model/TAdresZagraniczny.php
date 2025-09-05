<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Informacje opisujące adres zagraniczny
 */
class TAdresZagraniczny
{
    /**
     * Kod Kraju [Country Code]
     * @var string|null
     */
    public string|null $kodKraju;
    /**
     * Kod pocztowy [Postal code]
     * @var string|null
     */
    public string|null $kodPocztowy;
    /**
     * Nazwa miejscowości [City]
     * @var string|null
     */
    public string|null $miejscowosc;
    /**
     * Nazwa ulicy [Street]
     * @var string|null
     */
    public string|null $ulica;
    /**
     * Numer budynku [Building number]
     * @var string|null
     */
    public string|null $nrDomu;
    /**
     * Numer lokalu [Flat number]
     * @var string|null
     */
    public string|null $nrLokalu;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TAdresZagraniczny',
            'xmlNamespace' => 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "KodKraju",
                    'type' => "tns:KodKrajuType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "KodPocztowy",
                    'type' => "etd:TKodPocztowy",
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
                    'name' => "Ulica",
                    'type' => "etd:TUlica",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "NrDomu",
                    'type' => "etd:TNrBudynku",
                    'minOccurs' => 0,
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
            ],
            'attributes' => [
            ],
        ];
    }
}