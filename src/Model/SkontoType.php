<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class SkontoType
{
    /**
     * Warunki, które nabywca powinien spełnić, aby skorzystać ze skonta
     * @var string|null
     */
    public string|null $warunkiSkonta;
    /**
     * Wysokość skonta
     * @var string|null
     */
    public string|null $wysokoscSkonta;
    public static function schema(): array
    {
        return [
            'xmlName' => 'SkontoType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "WarunkiSkonta",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "WysokoscSkonta",
                    'type' => "tns:TZnakowy",
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