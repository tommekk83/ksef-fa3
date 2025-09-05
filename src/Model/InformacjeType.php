<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class InformacjeType
{
    /**
     * Stopka faktury
     * @var string|null
     */
    public string|null $stopkaFaktury;
    public static function schema(): array
    {
        return [
            'xmlName' => 'InformacjeType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "StopkaFaktury",
                    'type' => "etd:TTekstowy",
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