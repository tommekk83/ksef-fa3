<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Pełny zestaw danych o osobie niefizycznej - bez elementu Poczta w adresie polskim
 */
class TOsobaNiefizycznaPelna1
{
    /** @var TIdentyfikatorOsobyNiefizycznejPelny|null */
    public TIdentyfikatorOsobyNiefizycznejPelny|null $osobaNiefizyczna;
    /** @var AdresSiedzibyType2|null */
    public AdresSiedzibyType2|null $adresSiedziby;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TOsobaNiefizycznaPelna1',
            'xmlNamespace' => 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "OsobaNiefizyczna",
                    'type' => "etd:TIdentyfikatorOsobyNiefizycznejPelny",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "AdresSiedziby",
                    'type' => "tns:AdresSiedzibyType5",
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