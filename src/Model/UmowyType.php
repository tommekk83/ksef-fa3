<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class UmowyType
{
    /**
     * Data umowy
     * @var string|null
     */
    public string|null $dataUmowy;
    /**
     * Numer umowy
     * @var string|null
     */
    public string|null $nrUmowy;
    public static function schema(): array
    {
        return [
            'xmlName' => 'UmowyType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "DataUmowy",
                    'type' => "tns:TDataU",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrUmowy",
                    'type' => "tns:TZnakowy",
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