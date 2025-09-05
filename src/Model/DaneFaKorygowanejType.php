<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TWybor1;

class DaneFaKorygowanejType
{
    /**
     * Data wystawienia faktury korygowanej
     * @var string|null
     */
    public string|null $dataWystFaKorygowanej;
    /**
     * Numer faktury korygowanej
     * @var string|null
     */
    public string|null $nrFaKorygowanej;
    /**
     * Znacznik numeru KSeF faktury korygowanej
     * @var TWybor1|null
     */
    public TWybor1|null $nrKSeF;
    /**
     * Numer identyfikujący fakturę korygowaną w KSeF
     * @var string|null
     */
    public string|null $nrKSeFFaKorygowanej;
    /**
     * Znacznik faktury korygowanej wystawionej poza KSeF
     * @var TWybor1|null
     */
    public TWybor1|null $nrKSeFN;
    public static function schema(): array
    {
        return [
            'xmlName' => 'DaneFaKorygowanejType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "DataWystFaKorygowanej",
                    'type' => "tns:TDataT",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrFaKorygowanej",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrKSeF",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrKSeFFaKorygowanej",
                    'type' => "tns:TNumerKSeF",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrKSeFN",
                    'type' => "etd:TWybor1",
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