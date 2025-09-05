<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TKodKraju;

/**
 * Informacje opisujące adres
 */
class TAdres
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
    public static function schema(): array
    {
        return [
            'xmlName' => 'TAdres',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
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
            ],
        ];
    }
}