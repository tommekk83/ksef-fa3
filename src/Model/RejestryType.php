<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class RejestryType
{
    /**
     * Pełna nazwa
     * @var string|null
     */
    public string|null $pelnaNazwa;
    /**
     * KRS
     * @var string|null
     */
    public string|null $kRS;
    /**
     * REGON
     * @var string|null
     */
    public string|null $rEGON;
    /**
     * BDO
     * @var string|null
     */
    public string|null $bDO;
    public static function schema(): array
    {
        return [
            'xmlName' => 'RejestryType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "PelnaNazwa",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "KRS",
                    'type' => "etd:TNrKRS",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "REGON",
                    'type' => "etd:TNrREGON",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "BDO",
                    'type' => "tns:BDOType",
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