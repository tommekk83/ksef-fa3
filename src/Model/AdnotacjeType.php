<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TWybor1_2;

class AdnotacjeType
{
    /**
     * W przypadku dostawy towarów lub świadczenia usług, w odniesieniu do których obowiązek podatkowy powstaje zgodnie z art. 19a ust. 5 pkt 1 lub art. 21 ust. 1 ustawy - wyrazy "metoda kasowa"; należy podać wartość "1", w przeciwnym przypadku - wartość "2"
     * @var TWybor1_2|null
     */
    public TWybor1_2|null $p16;
    /**
     * W przypadku faktur, o których mowa w art. 106d ust. 1 ustawy - wyraz "samofakturowanie"; należy podać wartość "1", w przeciwnym przypadku - wartość "2"
     * @var TWybor1_2|null
     */
    public TWybor1_2|null $p17;
    /**
     * W przypadku dostawy towarów lub wykonania usługi, dla których obowiązanym do rozliczenia podatku od wartości dodanej lub podatku o podobnym charakterze jest nabywca towaru lub usługi - wyrazy "odwrotne obciążenie"; należy podać wartość "1", w przeciwnym przypadku - wartość "2"
     * @var TWybor1_2|null
     */
    public TWybor1_2|null $p18;
    /**
     * W przypadku faktur, w których kwota należności ogółem przekracza kwotę 15 000 zł lub jej równowartość wyrażoną w walucie obcej, obejmujących
     * dokonaną na rzecz podatnika dostawę towarów lub świadczenie usług, o których mowa w załączniku nr 15 do ustawy - wyrazy "mechanizm podzielonej płatności", przy czym do przeliczania na złote kwot wyrażonych w walucie obcej stosuje się zasady przeliczania kwot stosowane w celu określenia podstawy opodatkowania; należy podać wartość "1", w przeciwnym przypadku - wartość "2"
     * @var TWybor1_2|null
     */
    public TWybor1_2|null $p18A;
    /** @var ZwolnienieType|null */
    public ZwolnienieType|null $zwolnienie;
    /** @var NoweSrodkiTransportuType|null */
    public NoweSrodkiTransportuType|null $noweSrodkiTransportu;
    /**
     * W przypadku faktur wystawianych w procedurze uproszczonej przez drugiego w kolejności podatnika, o którym mowa w art. 135 ust. 1 pkt 4 lit. b i c oraz ust. 2 ustawy, zawierającej adnotację, o której mowa w art. 136 ust. 1 pkt 1 ustawy i stwierdzenie, o którym mowa w art. 136 ust. 1 pkt 2 ustawy, należy podać wartość "1", w przeciwnym przypadku - wartość "2"
     * @var TWybor1_2|null
     */
    public TWybor1_2|null $p23;
    /** @var PMarzyType|null */
    public PMarzyType|null $pMarzy;
    public static function schema(): array
    {
        return [
            'xmlName' => 'AdnotacjeType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "P_16",
                    'type' => "etd:TWybor1_2",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_17",
                    'type' => "etd:TWybor1_2",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_18",
                    'type' => "etd:TWybor1_2",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_18A",
                    'type' => "etd:TWybor1_2",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Zwolnienie",
                    'type' => "tns:ZwolnienieType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NoweSrodkiTransportu",
                    'type' => "tns:NoweSrodkiTransportuType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_23",
                    'type' => "etd:TWybor1_2",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "PMarzy",
                    'type' => "tns:PMarzyType",
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