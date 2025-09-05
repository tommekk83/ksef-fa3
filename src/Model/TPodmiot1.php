<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Zestaw danych identyfikacyjnych oraz danych adresowych podatnika
 */
class TPodmiot1
{
    /**
     * Identyfikator podatkowy NIP
     * @var string|null
     */
    public string|null $nIP;
    /**
     * Imię i nazwisko lub nazwa
     * @var string|null
     */
    public string|null $nazwa;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TPodmiot1',
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