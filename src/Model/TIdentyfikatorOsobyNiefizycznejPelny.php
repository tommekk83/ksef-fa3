<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Pełny zestaw danych identyfikacyjnych o osobie niefizycznej
 */
class TIdentyfikatorOsobyNiefizycznejPelny
{
    /**
     * Identyfikator podatkowy NIP
     * @var string|null
     */
    public string|null $nIP;
    /**
     * Pełna nazwa
     * @var string|null
     */
    public string|null $pelnaNazwa;
    /**
     * Skrócona nazwa
     * @var string|null
     */
    public string|null $skroconaNazwa;
    /**
     * Numer REGON
     * @var string|null
     */
    public string|null $rEGON;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TIdentyfikatorOsobyNiefizycznejPelny',
            'xmlNamespace' => 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "NIP",
                    'type' => "etd:TNrNIP",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "PelnaNazwa",
                    'type' => "tns:PelnaNazwaType3",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "SkroconaNazwa",
                    'type' => "tns:SkroconaNazwaType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "REGON",
                    'type' => "etd:TNrREGON",
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