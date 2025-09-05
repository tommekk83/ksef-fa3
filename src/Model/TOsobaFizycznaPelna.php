<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Pełny zestaw danych o osobie fizycznej
 */
class TOsobaFizycznaPelna
{
    /** @var TIdentyfikatorOsobyFizycznejPelny|null */
    public TIdentyfikatorOsobyFizycznejPelny|null $osobaFizyczna;
    /** @var AdresZamieszkaniaType|null */
    public AdresZamieszkaniaType|null $adresZamieszkania;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TOsobaFizycznaPelna',
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
                    'name' => "AdresZamieszkania",
                    'type' => "tns:AdresZamieszkaniaType7",
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