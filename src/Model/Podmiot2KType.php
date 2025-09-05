<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class Podmiot2KType
{
    /**
     * Dane identyfikujące nabywcę
     * @var TPodmiot2|null
     */
    public TPodmiot2|null $daneIdentyfikacyjne;
    /**
     * Adres nabywcy. Pola opcjonalne dla przypadków określonych w art. 106e ust. 5 pkt 3 ustawy
     * @var TAdres|null
     */
    public TAdres|null $adres;
    /**
     * Unikalny klucz powiązania danych nabywcy na fakturach korygujących, w przypadku gdy dane nabywcy na fakturze korygującej zmieniły się w stosunku do danych na fakturze korygowanej
     * @var string|null
     */
    public string|null $iDNabywcy;
    public static function schema(): array
    {
        return [
            'xmlName' => 'Podmiot2KType',
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
                    'name' => "Adres",
                    'type' => "tns:TAdres",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "IDNabywcy",
                    'type' => "tns:IDNabywcyType3",
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