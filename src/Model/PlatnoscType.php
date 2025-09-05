<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TFormaPlatnosci;
use Intermedia\Ksef\Fa3\Enums\TWybor1;
use Intermedia\Ksef\Fa3\Enums\TWybor1_2;

class PlatnoscType
{
    /**
     * Znacznik informujący, że należność wynikająca z faktury została zapłacona: 1 - zapłacono
     * @var TWybor1|null
     */
    public TWybor1|null $zaplacono;
    /**
     * Data zapłaty, jeśli do wystawienia faktury płatność została dokonana
     * @var string|null
     */
    public string|null $dataZaplaty;
    /**
     * Znacznik informujący, że należność wynikająca z faktury została zapłacona w części lub w całości:                                 1 - zapłacono w części;                           2 - zapłacono w całości, jeśli należność wynikająca z faktury została zapłacona w dwóch lub więcej częściach, a ostatnia płatność jest płatnością końcową
     * @var TWybor1_2|null
     */
    public TWybor1_2|null $znacznikZaplatyCzesciowej;
    /**
     * Dane zapłat częściowych
     * @var ZaplataCzesciowaType[]
     */
    public array $zaplataCzesciowa;
    /** @var TerminPlatnosciType[] */
    public array $terminPlatnosci;
    /**
     * Forma płatności
     * @var TFormaPlatnosci|null
     */
    public TFormaPlatnosci|null $formaPlatnosci;
    /**
     * Znacznik innej formy płatności: 1 - inna forma płatności
     * @var TWybor1|null
     */
    public TWybor1|null $platnoscInna;
    /**
     * Uszczegółowienie innej formy płatności
     * @var string|null
     */
    public string|null $opisPlatnosci;
    /**
     * Numer rachunku
     * @var TRachunekBankowy[]
     */
    public array $rachunekBankowy;
    /**
     * Rachunek faktora
     * @var TRachunekBankowy[]
     */
    public array $rachunekBankowyFaktora;
    /**
     * Skonto
     * @var SkontoType|null
     */
    public SkontoType|null $skonto;
    /**
     * Link do płatności bezgotówkowej
     * @var string|null
     */
    public string|null $linkDoPlatnosci;
    /**
     * Identyfikator płatności Krajowego Systemu e-Faktur
     * @var string|null
     */
    public string|null $iPKSeF;
    public static function schema(): array
    {
        return [
            'xmlName' => 'PlatnoscType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "Zaplacono",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "DataZaplaty",
                    'type' => "tns:TData",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "ZnacznikZaplatyCzesciowej",
                    'type' => "etd:TWybor1_2",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "ZaplataCzesciowa",
                    'type' => "tns:ZaplataCzesciowaType",
                    'minOccurs' => 1,
                    'maxOccurs' => "100",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "TerminPlatnosci",
                    'type' => "tns:TerminPlatnosciType",
                    'minOccurs' => 0,
                    'maxOccurs' => "100",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "FormaPlatnosci",
                    'type' => "tns:TFormaPlatnosci",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "PlatnoscInna",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "OpisPlatnosci",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "RachunekBankowy",
                    'type' => "tns:TRachunekBankowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "100",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "RachunekBankowyFaktora",
                    'type' => "tns:TRachunekBankowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "20",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Skonto",
                    'type' => "tns:SkontoType",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "LinkDoPlatnosci",
                    'type' => "tns:LinkDoPlatnosciType",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "IPKSeF",
                    'type' => "tns:IPKSeFType",
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