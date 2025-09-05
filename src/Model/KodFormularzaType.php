<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TKodFormularza;

class KodFormularzaType
{
    /**
     * Wartość treści elementu (simpleContent).
     * @var TKodFormularza
     */
    public TKodFormularza $value;
    /** @var string */
    public string $kodSystemowy;
    /** @var string */
    public string $wersjaSchemy;
    public static function schema(): array
    {
        return [
            'xmlName' => 'KodFormularzaType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'simple',
            'base' => "tns:TKodFormularza",
            'attributes' => [
                [
                    'name' => "kodSystemowy",
                    'type' => "xsd:string",
                    'use' => "required",
                    'fixed' => "FA (3)",
                    'default' => null,
                ],
                [
                    'name' => "wersjaSchemy",
                    'type' => "xsd:string",
                    'use' => "required",
                    'fixed' => "1-0E",
                    'default' => null,
                ],
            ],
        ];
    }
}