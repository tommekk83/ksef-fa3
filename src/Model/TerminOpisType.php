<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class TerminOpisType
{
    /** @var int|null */
    public int|null $ilosc;
    /** @var string|null */
    public string|null $jednostka;
    /** @var string|null */
    public string|null $zdarzeniePoczatkowe;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TerminOpisType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "Ilosc",
                    'type' => "xsd:integer",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Jednostka",
                    'type' => "tns:TZnakowy50",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "ZdarzeniePoczatkowe",
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