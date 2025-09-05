<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TWybor1;

class ZwolnienieType
{
    /**
     * Znacznik dostawy towarów lub świadczenia usług zwolnionych od podatku na podstawie art. 43 ust. 1 ustawy, art. 113 ust. 1 i 9 ustawy albo przepisów wydanych na podstawie art. 82 ust. 3 ustawy lub na podstawie innych przepisów
     * @var TWybor1|null
     */
    public TWybor1|null $p19;
    /**
     * Jeśli pole P_19 równa się "1" - należy wskazać przepis ustawy albo aktu wydanego na podstawie ustawy, na podstawie którego podatnik stosuje zwolnienie od podatku
     * @var string|null
     */
    public string|null $p19A;
    /**
     * Jeśli pole P_19 równa się "1" - należy wskazać przepis dyrektywy 2006/112/WE, który zwalnia od podatku taką dostawę towarów lub takie świadczenie usług
     * @var string|null
     */
    public string|null $p19B;
    /**
     * Jeśli pole P_19 równa się "1" - należy wskazać inną podstawę prawną wskazującą na to, że dostawa towarów lub świadczenie usług korzysta ze zwolnienia od podatku
     * @var string|null
     */
    public string|null $p19C;
    /**
     * Znacznik braku dostawy towarów lub świadczenia usług zwolnionych od podatku na podstawie art. 43 ust. 1 ustawy, art. 113 ust. 1 i 9 ustawy albo przepisów wydanych na podstawie art. 82 ust. 3 ustawy lub na podstawie innych przepisów
     * @var TWybor1|null
     */
    public TWybor1|null $p19N;
    public static function schema(): array
    {
        return [
            'xmlName' => 'ZwolnienieType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "P_19",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_19A",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_19B",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_19C",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_19N",
                    'type' => "etd:TWybor1",
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