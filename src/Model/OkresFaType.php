<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class OkresFaType
{
    /**
     * Data początkowa okresu, którego dotyczy faktura
     * @var string|null
     */
    public string|null $p6Od;
    /**
     * Data końcowa okresu, którego dotyczy faktura - data dokonania lub zakończenia dostawy towarów lub wykonania usługi
     * @var string|null
     */
    public string|null $p6Do;
    public static function schema(): array
    {
        return [
            'xmlName' => 'OkresFaType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "P_6_Od",
                    'type' => "tns:TDataT",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_6_Do",
                    'type' => "tns:TDataT",
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