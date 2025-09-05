<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class ZamowieniaType
{
    /**
     * Data zamówienia
     * @var string|null
     */
    public string|null $dataZamowienia;
    /**
     * Numer zamówienia
     * @var string|null
     */
    public string|null $nrZamowienia;
    public static function schema(): array
    {
        return [
            'xmlName' => 'ZamowieniaType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "DataZamowienia",
                    'type' => "tns:TDataU",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrZamowienia",
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