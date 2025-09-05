<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class BlokDanychType
{
    /**
     * Nagłówek bloku danych
     * @var string|null
     */
    public string|null $zNaglowek;
    /**
     * Dane opisowe
     * @var MetaDaneType[]
     */
    public array $metaDane;
    /**
     * Część tekstowa bloku danych
     * @var TekstType|null
     */
    public TekstType|null $tekst;
    /**
     * Tabele
     * @var TabelaType[]
     */
    public array $tabela;
    public static function schema(): array
    {
        return [
            'xmlName' => 'BlokDanychType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "ZNaglowek",
                    'type' => "tns:TZnakowy512",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "MetaDane",
                    'type' => "tns:MetaDaneType",
                    'minOccurs' => 1,
                    'maxOccurs' => "1000",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Tekst",
                    'type' => "tns:TekstType",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Tabela",
                    'type' => "tns:TabelaType",
                    'minOccurs' => 0,
                    'maxOccurs' => "1000",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
            ],
            'attributes' => [
            ],
        ];
    }
}