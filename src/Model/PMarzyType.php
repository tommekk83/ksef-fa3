<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TWybor1;

class PMarzyType
{
    /**
     * Znacznik wystąpienia procedur marży, o których mowa w art. 119 lub art. 120 ustawy
     * @var TWybor1|null
     */
    public TWybor1|null $pPMarzy;
    /**
     * Znacznik świadczenia usług turystyki, dla których podstawę opodatkowania stanowi marża, zgodnie z art. 119 ust. 1 ustawy, a faktura dokumentująca świadczenie zawiera wyrazy "procedura marży dla biur podróży"
     * @var TWybor1|null
     */
    public TWybor1|null $pPMarzy2;
    /**
     * Znacznik dostawy towarów używanych, dla których podstawę opodatkowania stanowi marża, zgodnie z art. 120 ustawy, a faktura dokumentująca dostawę zawiera wyrazy "procedura marży - towary używane"
     * @var TWybor1|null
     */
    public TWybor1|null $pPMarzy31;
    /**
     * Znacznik dostawy dzieł sztuki, dla których podstawę opodatkowania stanowi marża, zgodnie z art. 120 ustawy, a faktura dokumentująca dostawę zawiera wyrazy "procedura marży - dzieła sztuki"
     * @var TWybor1|null
     */
    public TWybor1|null $pPMarzy32;
    /**
     * Znacznik dostawy przedmiotów kolekcjonerskich i antyków, dla których podstawę opodatkowania stanowi marża, zgodnie z art. 120 ustawy, a faktura dokumentująca dostawę zawiera wyrazy "procedura marży - przedmioty kolekcjonerskie i antyki"
     * @var TWybor1|null
     */
    public TWybor1|null $pPMarzy33;
    /**
     * Znacznik braku wystąpienia procedur marży, o których mowa w art. 119 lub art. 120 ustawy
     * @var TWybor1|null
     */
    public TWybor1|null $pPMarzyN;
    public static function schema(): array
    {
        return [
            'xmlName' => 'PMarzyType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "P_PMarzy",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_PMarzy_2",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_PMarzy_3_1",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_PMarzy_3_2",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_PMarzy_3_3",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_PMarzyN",
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