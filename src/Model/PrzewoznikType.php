<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class PrzewoznikType
{
    /**
     * Dane identyfikacyjne przewoźnika
     * @var TPodmiot2|null
     */
    public TPodmiot2|null $daneIdentyfikacyjne;
    /**
     * Adres przewoźnika
     * @var TAdres|null
     */
    public TAdres|null $adresPrzewoznika;
    public static function schema(): array
    {
        return [
            'xmlName' => 'PrzewoznikType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "DaneIdentyfikacyjne",
                    'type' => "tns:TPodmiot2",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "AdresPrzewoznika",
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