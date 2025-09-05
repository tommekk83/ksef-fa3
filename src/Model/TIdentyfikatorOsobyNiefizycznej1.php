<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Podstawowy zestaw danych identyfikacyjnych o osobie niefizycznej  - bez elementu Numer REGON
 */
class TIdentyfikatorOsobyNiefizycznej1
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
    public static function schema(): array
    {
        return [
            'xmlName' => 'TIdentyfikatorOsobyNiefizycznej1',
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
                    'name' => "PelnaNazwa",
                    'type' => "tns:PelnaNazwaType2",
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