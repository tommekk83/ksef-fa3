<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TRolaPodmiotuUpowaznionego;

class PodmiotUpowaznionyType
{
    /**
     * Numer EORI podmiotu upoważnionego
     * @var string|null
     */
    public string|null $nrEORI;
    /**
     * Dane identyfikujące podmiotu upoważnionego
     * @var TPodmiot1|null
     */
    public TPodmiot1|null $daneIdentyfikacyjne;
    /**
     * Adres podmiotu upoważnionego
     * @var TAdres|null
     */
    public TAdres|null $adres;
    /**
     * Adres korespondencyjny podmiotu upoważnionego
     * @var TAdres|null
     */
    public TAdres|null $adresKoresp;
    /**
     * Dane kontaktowe podmiotu upoważnionego
     * @var DaneKontaktoweType2[]
     */
    public array $daneKontaktowe;
    /**
     * Rola podmiotu upoważnionego
     * @var TRolaPodmiotuUpowaznionego|null
     */
    public TRolaPodmiotuUpowaznionego|null $rolaPU;
    public static function schema(): array
    {
        return [
            'xmlName' => 'PodmiotUpowaznionyType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "NrEORI",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "DaneIdentyfikacyjne",
                    'type' => "tns:TPodmiot1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Adres",
                    'type' => "tns:TAdres",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "AdresKoresp",
                    'type' => "tns:TAdres",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "DaneKontaktowe",
                    'type' => "tns:DaneKontaktoweType4",
                    'minOccurs' => 0,
                    'maxOccurs' => "3",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "RolaPU",
                    'type' => "tns:TRolaPodmiotuUpowaznionego",
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