<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Podstawowy zestaw danych o osobie fizycznej lub niefizycznej - bez elementu Poczta w adresie polskim
 */
class TPodmiotDowolny1
{
    /** @var TIdentyfikatorOsobyFizycznej|null */
    public TIdentyfikatorOsobyFizycznej|null $osobaFizyczna;
    /** @var TIdentyfikatorOsobyNiefizycznej|null */
    public TIdentyfikatorOsobyNiefizycznej|null $osobaNiefizyczna;
    /** @var AdresZamieszkaniaSiedzibyType2|null */
    public AdresZamieszkaniaSiedzibyType2|null $adresZamieszkaniaSiedziby;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TPodmiotDowolny1',
            'xmlNamespace' => 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "OsobaFizyczna",
                    'type' => "etd:TIdentyfikatorOsobyFizycznej",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "OsobaNiefizyczna",
                    'type' => "etd:TIdentyfikatorOsobyNiefizycznej",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "AdresZamieszkaniaSiedziby",
                    'type' => "tns:AdresZamieszkaniaSiedzibyType2",
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