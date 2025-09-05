<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Zestaw danych identyfikacyjnych dla osoby niefizycznej zagranicznej
 */
class TIdentyfikatorOsobyNiefizycznejZagranicznej
{
    /**
     * Pełna nazwa [Name]
     * @var string|null
     */
    public string|null $pelnaNazwa;
    /**
     * Nazwa skrócona [Short Name]
     * @var string|null
     */
    public string|null $skroconaNazwa;
    /**
     * Identyfikator podatkowy NIP [Tax Identification Number (NIP)]
     * @var string|null
     */
    public string|null $nIP;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TIdentyfikatorOsobyNiefizycznejZagranicznej',
            'xmlNamespace' => 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "PelnaNazwa",
                    'type' => "tns:PelnaNazwaType4",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "SkroconaNazwa",
                    'type' => "tns:SkroconaNazwaType2",
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