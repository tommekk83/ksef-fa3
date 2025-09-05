<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Skrócony zestaw danych o osobie fizycznej lub niefizycznej z identyfikatorem NIP albo PESEL
 */
class TPodmiotDowolnyBezAdresu1
{
    /** @var TIdentyfikatorOsobyFizycznej1|null */
    public TIdentyfikatorOsobyFizycznej1|null $osobaFizyczna;
    /** @var TIdentyfikatorOsobyNiefizycznej|null */
    public TIdentyfikatorOsobyNiefizycznej|null $osobaNiefizyczna;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TPodmiotDowolnyBezAdresu1',
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
                    'name' => "OsobaNiefizyczna",
                    'type' => "etd:TIdentyfikatorOsobyNiefizycznej",
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