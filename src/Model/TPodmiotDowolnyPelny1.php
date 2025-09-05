<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Pełny zestaw danych o osobie fizycznej lub niefizycznej - bez elementu Poczta w adresie polskim
 */
class TPodmiotDowolnyPelny1
{
    /** @var TIdentyfikatorOsobyFizycznejPelny|null */
    public TIdentyfikatorOsobyFizycznejPelny|null $osobaFizyczna;
    /** @var TIdentyfikatorOsobyNiefizycznejPelny|null */
    public TIdentyfikatorOsobyNiefizycznejPelny|null $osobaNiefizyczna;
    /** @var AdresZamieszkaniaSiedzibyType2|null */
    public AdresZamieszkaniaSiedzibyType2|null $adresZamieszkaniaSiedziby;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TPodmiotDowolnyPelny1',
            'xmlNamespace' => 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "OsobaFizyczna",
                    'type' => "etd:TIdentyfikatorOsobyFizycznejPelny",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "OsobaNiefizyczna",
                    'type' => "etd:TIdentyfikatorOsobyNiefizycznejPelny",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "AdresZamieszkaniaSiedziby",
                    'type' => "tns:AdresZamieszkaniaSiedzibyType5",
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