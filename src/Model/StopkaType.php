<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class StopkaType
{
    /**
     * Pozostałe dane
     * @var InformacjeType[]
     */
    public array $informacje;
    /**
     * Numery podmiotu lub grupy podmiotów w innych rejestrach i bazach danych
     * @var RejestryType[]
     */
    public array $rejestry;
    public static function schema(): array
    {
        return [
            'xmlName' => 'StopkaType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "Informacje",
                    'type' => "tns:InformacjeType",
                    'minOccurs' => 0,
                    'maxOccurs' => "3",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Rejestry",
                    'type' => "tns:RejestryType",
                    'minOccurs' => 0,
                    'maxOccurs' => "100",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
            ],
            'attributes' => [
            ],
        ];
    }
}