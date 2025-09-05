<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TKodKraju;
use Intermedia\Ksef\Fa3\Enums\TKodyKrajowUE;
use Intermedia\Ksef\Fa3\Enums\TWybor1;

/**
 * Zestaw danych identyfikacyjnych oraz danych adresowych podmiotów trzecich
 */
class TPodmiot3
{
    /**
     * Identyfikator podatkowy NIP
     * @var string|null
     */
    public string|null $nIP;
    /**
     * Identyfikator wewnętrzny z NIP
     * @var string|null
     */
    public string|null $iDWew;
    /**
     * Kod (prefiks) nabywcy VAT UE, o którym mowa w art. 106e ust. 1 pkt 24 ustawy oraz w przypadku, o którym mowa w art. 136 ust. 1 pkt 4 ustawy
     * @var TKodyKrajowUE|null
     */
    public TKodyKrajowUE|null $kodUE;
    /**
     * Numer Identyfikacyjny VAT kontrahenta UE
     * @var string|null
     */
    public string|null $nrVatUE;
    /**
     * Kod kraju nadania identyfikatora podatkowego
     * @var TKodKraju|null
     */
    public TKodKraju|null $kodKraju;
    /**
     * Identyfikator podatkowy inny
     * @var string|null
     */
    public string|null $nrID;
    /**
     * Podmiot nie posiada identyfikatora podatkowego lub identyfikator nie występuje na fakturze: 1- tak
     * @var TWybor1|null
     */
    public TWybor1|null $brakID;
    /**
     * Imię i nazwisko lub nazwa
     * @var string|null
     */
    public string|null $nazwa;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TPodmiot3',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "NIP",
                    'type' => "etd:TNrNIP",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "IDWew",
                    'type' => "tns:TNIPIdWew",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "KodUE",
                    'type' => "tns:TKodyKrajowUE",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrVatUE",
                    'type' => "tns:TNrVatUE",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "KodKraju",
                    'type' => "etd:TKodKraju",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrID",
                    'type' => "tns:NrIDType2",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "BrakID",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Nazwa",
                    'type' => "tns:TZnakowy512",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
            ],
            'attributes' => [
            ],
        ];
    }
}