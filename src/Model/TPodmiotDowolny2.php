<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Podstawowy zestaw danych o osobie fizycznej lub niefizycznej - bez elementu Numer REGON oraz bez elementu Poczta w adresie polskim
 */
class TPodmiotDowolny2
{
    /** @var TIdentyfikatorOsobyFizycznej2|null */
    public TIdentyfikatorOsobyFizycznej2|null $osobaFizyczna;
    /** @var TIdentyfikatorOsobyNiefizycznej1|null */
    public TIdentyfikatorOsobyNiefizycznej1|null $osobaNiefizyczna;
    /** @var AdresZamieszkaniaSiedzibyType2|null */
    public AdresZamieszkaniaSiedzibyType2|null $adresZamieszkaniaSiedziby;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TPodmiotDowolny2',
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
                [
                    'name' => "AdresZamieszkaniaSiedziby",
                    'type' => "tns:AdresZamieszkaniaSiedzibyType3",
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