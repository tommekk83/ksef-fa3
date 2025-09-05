<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

/**
 * Typ złożony, klucz-wartość
 */
class TKluczWartosc
{
    /**
     * Numer wiersza podany w polu NrWierszaFa lub NrWierszaZam, jeśli informacja odnosi się wyłącznie do danej pozycji faktury
     * @var string|null
     */
    public string|null $nrWiersza;
    /**
     * Klucz
     * @var string|null
     */
    public string|null $klucz;
    /**
     * Wartość
     * @var string|null
     */
    public string|null $wartosc;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TKluczWartosc',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "NrWiersza",
                    'type' => "tns:TNaturalny",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Klucz",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Wartosc",
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