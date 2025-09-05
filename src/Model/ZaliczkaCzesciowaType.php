<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class ZaliczkaCzesciowaType
{
    /**
     * Data otrzymania płatności, o której mowa w art. 106b ust. 1 pkt 4 ustawy
     * @var string|null
     */
    public string|null $p6Z;
    /**
     * Kwota płatności, o której mowa w art. 106b ust. 1 pkt 4 ustawy, składająca się na kwotę w polu P_15. W przypadku faktur korygujących  - korekta kwoty wynikającej z faktury korygowanej
     * @var string|null
     */
    public string|null $p15Z;
    /**
     * Kurs waluty stosowany do wyliczenia kwoty podatku w przypadkach, o których mowa w dziale VI ustawy
     * @var string|null
     */
    public string|null $kursWalutyZW;
    public static function schema(): array
    {
        return [
            'xmlName' => 'ZaliczkaCzesciowaType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "P_6Z",
                    'type' => "tns:TDataT",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_15Z",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "KursWalutyZW",
                    'type' => "tns:TIlosci",
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