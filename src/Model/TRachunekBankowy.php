<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TRachunekWlasnyBanku;

/**
 * Informacje o rachunku
 */
class TRachunekBankowy
{
    /**
     * Pełny numer rachunku
     * @var string|null
     */
    public string|null $nrRB;
    /**
     * Kod SWIFT
     * @var string|null
     */
    public string|null $sWIFT;
    /**
     * Rachunek własny
     * @var TRachunekWlasnyBanku|null
     */
    public TRachunekWlasnyBanku|null $rachunekWlasnyBanku;
    /**
     * Nazwa
     * @var string|null
     */
    public string|null $nazwaBanku;
    /**
     * Opis rachunku
     * @var string|null
     */
    public string|null $opisRachunku;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TRachunekBankowy',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "NrRB",
                    'type' => "tns:TNrRB",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "SWIFT",
                    'type' => "tns:SWIFT_Type",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "RachunekWlasnyBanku",
                    'type' => "tns:TRachunekWlasnyBanku",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NazwaBanku",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "OpisRachunku",
                    'type' => "tns:TZnakowy",
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