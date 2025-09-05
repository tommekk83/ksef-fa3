<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TKodyKrajowUE;

class Podmiot1KType
{
    /**
     * Kod (prefiks) podatnika VAT UE dla przypadków określonych w art. 97 ust. 10 pkt 2 i 3 ustawy oraz w przypadku, o którym mowa w art. 136 ust. 1 pkt 3 ustawy
     * @var TKodyKrajowUE|null
     */
    public TKodyKrajowUE|null $prefiksPodatnika;
    /**
     * Dane identyfikujące podatnika
     * @var TPodmiot1|null
     */
    public TPodmiot1|null $daneIdentyfikacyjne;
    /**
     * Adres podatnika
     * @var TAdres|null
     */
    public TAdres|null $adres;
    public static function schema(): array
    {
        return [
            'xmlName' => 'Podmiot1KType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "PrefiksPodatnika",
                    'type' => "tns:TKodyKrajowUE",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "DaneIdentyfikacyjne",
                    'type' => "tns:TPodmiot1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Adres",
                    'type' => "tns:TAdres",
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