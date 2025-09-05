<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TKodKraju;

class AdresZamieszkaniaType
{
    /**
     * Kod Kraju [Country Code]
     * @var TKodKraju|null
     */
    public TKodKraju|null $kodKraju;
    /**
     * Adres [Address]
     * @var string|null
     */
    public string|null $adresL1;
    /**
     * Adres [Address]
     * @var string|null
     */
    public string|null $adresL2;
    /**
     * Globalny Numer Lokalizacyjny [Global Location Number]
     * @var string|null
     */
    public string|null $gLN;
    /** @var string */
    public string $rodzajAdresu;
    public static function schema(): array
    {
        return [
            'xmlName' => 'AdresZamieszkaniaType',
            'xmlNamespace' => 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2022/01/05/eD/DefinicjeTypy/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "KodKraju",
                    'type' => "etd:TKodKraju",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "AdresL1",
                    'type' => "tns:TZnakowy512",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "AdresL2",
                    'type' => "tns:TZnakowy512",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "GLN",
                    'type' => "tns:TGLN",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
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