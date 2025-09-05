<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class TerminPlatnosciType
{
    /**
     * Termin płatności
     * @var string|null
     */
    public string|null $termin;
    /**
     * Opis terminu płatności
     * @var TerminOpisType|null
     */
    public TerminOpisType|null $terminOpis;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TerminPlatnosciType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "Termin",
                    'type' => "tns:TData",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "TerminOpis",
                    'type' => "tns:TerminOpisType",
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