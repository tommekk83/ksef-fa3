<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Skrócony zestaw danych o osobie fizycznej lub niefizycznej z identyfikatorem NIP - bez elementu numer REGON dla osoby niefizycznej
 */
class TPodmiotDowolnyBezAdresu3
{
    /** @var TIdentyfikatorOsobyFizycznej2|null */
    public TIdentyfikatorOsobyFizycznej2|null $osobaFizyczna;
    /** @var TIdentyfikatorOsobyNiefizycznej1|null */
    public TIdentyfikatorOsobyNiefizycznej1|null $osobaNiefizyczna;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TPodmiotDowolnyBezAdresu3',
            'xmlNamespace' => 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "OsobaFizyczna",
                    'type' => "etd:TIdentyfikatorOsobyFizycznej2",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "OsobaNiefizyczna",
                    'type' => "etd:TIdentyfikatorOsobyNiefizycznej1",
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