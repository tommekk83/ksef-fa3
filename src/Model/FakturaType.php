<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class FakturaType
{
    /**
     * Nagłówek
     * @var TNaglowek|null
     */
    public TNaglowek|null $naglowek;
    /**
     * Dane podatnika. Imię i nazwisko lub nazwa sprzedawcy towarów lub usług
     * @var Podmiot1Type|null
     */
    public Podmiot1Type|null $podmiot1;
    /**
     * Dane nabywcy
     * @var Podmiot2Type|null
     */
    public Podmiot2Type|null $podmiot2;
    /**
     * Dane podmiotu/-ów trzeciego/-ich (innego/-ych niż sprzedawca i nabywca wymieniony w części Podmiot2), związanego/-ych z fakturą
     * @var Podmiot3Type[]
     */
    public array $podmiot3;
    /**
     * Dane podmiotu upoważnionego, związanego z fakturą
     * @var PodmiotUpowaznionyType|null
     */
    public PodmiotUpowaznionyType|null $podmiotUpowazniony;
    /**
     * Na podstawie art. 106a - 106q ustawy. Pola dotyczące wartości sprzedaży i podatku wypełnia się w walucie, w której wystawiono fakturę, z wyjątkiem pól dotyczących podatku przeliczonego zgodnie z przepisami działu VI w związku z art. 106e ust. 11 ustawy. W przypadku wystawienia faktury korygującej wypełnia się wszystkie pola wg stanu po korekcie, a pola dotyczące podstaw opodatkowania, podatku oraz należności ogółem wypełnia się poprzez różnicę
     * @var FaType|null
     */
    public FaType|null $fa;
    /**
     * Pozostałe dane na fakturze
     * @var StopkaType|null
     */
    public StopkaType|null $stopka;
    /**
     * Załącznik do faktury VAT
     * @var ZalacznikType|null
     */
    public ZalacznikType|null $zalacznik;
    public static function schema(): array
    {
        return [
            'xmlName' => 'FakturaType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "Naglowek",
                    'type' => "tns:TNaglowek",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Podmiot1",
                    'type' => "tns:Podmiot1Type",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Podmiot2",
                    'type' => "tns:Podmiot2Type",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Podmiot3",
                    'type' => "tns:Podmiot3Type",
                    'minOccurs' => 0,
                    'maxOccurs' => "100",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "PodmiotUpowazniony",
                    'type' => "tns:PodmiotUpowaznionyType",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Fa",
                    'type' => "tns:FaType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Stopka",
                    'type' => "tns:StopkaType",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Zalacznik",
                    'type' => "tns:ZalacznikType",
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