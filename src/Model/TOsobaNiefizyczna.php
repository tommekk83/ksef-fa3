<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Podstawowy zestaw danych o osobie niefizycznej
 */
class TOsobaNiefizyczna
{
    /** @var TIdentyfikatorOsobyNiefizycznej|null */
    public TIdentyfikatorOsobyNiefizycznej|null $osobaNiefizyczna;
    /** @var AdresSiedzibyType|null */
    public AdresSiedzibyType|null $adresSiedziby;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TOsobaNiefizyczna',
            'xmlNamespace' => 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "OsobaNiefizyczna",
                    'type' => "etd:TIdentyfikatorOsobyNiefizycznej",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "AdresSiedziby",
                    'type' => "tns:AdresSiedzibyType",
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