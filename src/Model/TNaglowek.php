<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\WariantFormularza;

/**
 * Nagłówek
 */
class TNaglowek
{
    /** @var KodFormularzaType|null */
    public KodFormularzaType|null $kodFormularza;
    /** @var WariantFormularza|null */
    public WariantFormularza|null $wariantFormularza;
    /**
     * Data i czas wytworzenia faktury
     * @var string|null
     */
    public string|null $dataWytworzeniaFa;
    /**
     * Nazwa systemu teleinformatycznego, z którego korzysta podatnik
     * @var string|null
     */
    public string|null $systemInfo;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TNaglowek',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "KodFormularza",
                    'type' => "tns:KodFormularzaType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "WariantFormularza",
                    'type' => "tns:WariantFormularzaType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "DataWytworzeniaFa",
                    'type' => "tns:DataWytworzeniaFaType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "SystemInfo",
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