<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class ZamowienieType
{
    /**
     * Wartość zamówienia lub umowy z uwzględnieniem kwoty podatku
     * @var string|null
     */
    public string|null $wartoscZamowienia;
    /**
     * Szczegółowe pozycje zamówienia lub umowy w walucie, w której wystawiono fakturę zaliczkową
     * @var ZamowienieWierszType[]
     */
    public array $zamowienieWiersz;
    public static function schema(): array
    {
        return [
            'xmlName' => 'ZamowienieType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "WartoscZamowienia",
                    'type' => "tns:TKwotowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "ZamowienieWiersz",
                    'type' => "tns:ZamowienieWierszType",
                    'minOccurs' => 1,
                    'maxOccurs' => "10000",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
            ],
            'attributes' => [
            ],
        ];
    }
}