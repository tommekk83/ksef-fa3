<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Podstawowy zestaw danych o osobie niefizycznej - bez elementu Numer REGON oraz bez elementu Poczta w adresie polskim
 */
class TOsobaNiefizyczna2
{
    /** @var TIdentyfikatorOsobyNiefizycznej1|null */
    public TIdentyfikatorOsobyNiefizycznej1|null $osobaNiefizyczna;
    /** @var AdresSiedzibyType2|null */
    public AdresSiedzibyType2|null $adresSiedziby;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TOsobaNiefizyczna2',
            'xmlNamespace' => 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "OsobaNiefizyczna",
                    'type' => "etd:TIdentyfikatorOsobyNiefizycznej1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "AdresSiedziby",
                    'type' => "tns:AdresSiedzibyType3",
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