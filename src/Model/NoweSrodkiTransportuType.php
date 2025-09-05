<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TWybor1;
use Intermedia\Ksef\Fa3\Enums\TWybor1_2;

class NoweSrodkiTransportuType
{
    /**
     * Znacznik wewnątrzwspólnotowej dostawy nowych środków transportu
     * @var TWybor1|null
     */
    public TWybor1|null $p22;
    /**
     * Jeśli występuje obowiązek, o którym mowa w art. 42 ust. 5 ustawy, należy podać wartość "1", w przeciwnym przypadku - wartość "2"
     * @var TWybor1_2|null
     */
    public TWybor1_2|null $p425;
    /** @var NowySrodekTransportuType[] */
    public array $nowySrodekTransportu;
    /**
     * Znacznik braku wewnątrzwspólnotowej dostawy nowych środków transportu
     * @var TWybor1|null
     */
    public TWybor1|null $p22N;
    public static function schema(): array
    {
        return [
            'xmlName' => 'NoweSrodkiTransportuType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "P_22",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_42_5",
                    'type' => "etd:TWybor1_2",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NowySrodekTransportu",
                    'type' => "tns:NowySrodekTransportuType",
                    'minOccurs' => 1,
                    'maxOccurs' => "10000",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22N",
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