<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class AdresZamieszkaniaType2
{
    /** @var TAdresPolski1|null */
    public TAdresPolski1|null $adresPol;
    /** @var TAdresZagraniczny|null */
    public TAdresZagraniczny|null $adresZagr;
    /** @var string */
    public string $rodzajAdresu;
    public static function schema(): array
    {
        return [
            'xmlName' => 'AdresZamieszkaniaType3',
            'xmlNamespace' => 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "AdresPol",
                    'type' => "etd:TAdresPolski1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
                [
                    'name' => "AdresZagr",
                    'type' => "etd:TAdresZagraniczny",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/",
                ],
            ],
            'attributes' => [
                [
                    'name' => "rodzajAdresu",
                    'type' => "xsd:string",
                    'use' => "required",
                    'fixed' => "RAD",
                    'default' => null,
                ],
            ],
        ];
    }
}