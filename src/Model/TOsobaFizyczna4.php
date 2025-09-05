<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Podstawowy zestaw danych o osobie fizycznej z identyfikatorem NIP - bez elementu Poczta w adresie polskim
 */
class TOsobaFizyczna4
{
    /** @var TIdentyfikatorOsobyFizycznej2|null */
    public TIdentyfikatorOsobyFizycznej2|null $osobaFizyczna;
    /** @var AdresZamieszkaniaType2|null */
    public AdresZamieszkaniaType2|null $adresZamieszkania;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TOsobaFizyczna4',
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
                    'name' => "AdresZamieszkania",
                    'type' => "tns:AdresZamieszkaniaType6",
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