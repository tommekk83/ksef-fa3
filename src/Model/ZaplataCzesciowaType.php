<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TFormaPlatnosci;
use Intermedia\Ksef\Fa3\Enums\TWybor1;

class ZaplataCzesciowaType
{
    /**
     * Kwota zapłaty częściowej
     * @var string|null
     */
    public string|null $kwotaZaplatyCzesciowej;
    /**
     * Data zapłaty częściowej, jeśli do wystawienia faktury płatność częściowa została dokonana
     * @var string|null
     */
    public string|null $dataZaplatyCzesciowej;
    /**
     * Forma płatności
     * @var TFormaPlatnosci|null
     */
    public TFormaPlatnosci|null $formaPlatnosci;
    /**
     * Znacznik innej formy płatności: 1 - inna forma płatności
     * @var TWybor1|null
     */
    public TWybor1|null $platnoscInna;
    /**
     * Uszczegółowienie innej formy płatności
     * @var string|null
     */
    public string|null $opisPlatnosci;
    public static function schema(): array
    {
        return [
            'xmlName' => 'ZaplataCzesciowaType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "KwotaZaplatyCzesciowej",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "DataZaplatyCzesciowej",
                    'type' => "tns:TData",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "FormaPlatnosci",
                    'type' => "tns:TFormaPlatnosci",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "PlatnoscInna",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "OpisPlatnosci",
                    'type' => "tns:TZnakowy",
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