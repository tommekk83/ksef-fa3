<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class AdresKorespType extends TAdres
{
    public static function schema(): array
    {
        return [
            'xmlName' => 'AdresKorespType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
            ],
            'attributes' => [
            ],
        ];
    }
}