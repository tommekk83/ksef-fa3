<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Podstawowy zestaw danych o osobie fizycznej z identyfikatorem NIP albo PESEL - bez elementu Poczta w adresie polskim
 */
class TOsobaFizyczna3
{
    /** @var TIdentyfikatorOsobyFizycznej1|null */
    public TIdentyfikatorOsobyFizycznej1|null $osobaFizyczna;
    /** @var AdresZamieszkaniaType2|null */
    public AdresZamieszkaniaType2|null $adresZamieszkania;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TOsobaFizyczna3',
            'xmlNamespace' => 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "OsobaFizyczna",
                    'type' => "etd:TIdentyfikatorOsobyFizycznej1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "AdresZamieszkania",
                    'type' => "tns:AdresZamieszkaniaType4",
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