<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Podstawowy zestaw danych o osobie fizycznej - bez elementu Poczta w adresie polskim
 */
class TOsobaFizyczna5
{
    /** @var TIdentyfikatorOsobyFizycznej|null */
    public TIdentyfikatorOsobyFizycznej|null $osobaFizyczna;
    /** @var AdresZamieszkaniaType2|null */
    public AdresZamieszkaniaType2|null $adresZamieszkania;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TOsobaFizyczna5',
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
                    'name' => "AdresZamieszkania",
                    'type' => "tns:AdresZamieszkaniaType3",
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