<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TLadunek;
use Intermedia\Ksef\Fa3\Enums\TRodzajTransportu;
use Intermedia\Ksef\Fa3\Enums\TWybor1;

class TransportType
{
    /**
     * Rodzaj zastosowanego transportu w przypadku dokonanej dostawy towarów
     * @var TRodzajTransportu|null
     */
    public TRodzajTransportu|null $rodzajTransportu;
    /**
     * Znacznik innego rodzaju transportu: 1 - inny rodzaj transportu
     * @var TWybor1|null
     */
    public TWybor1|null $transportInny;
    /**
     * Opis innego rodzaju transportu
     * @var string|null
     */
    public string|null $opisInnegoTransportu;
    /** @var PrzewoznikType|null */
    public PrzewoznikType|null $przewoznik;
    /**
     * Numer zlecenia transportu
     * @var string|null
     */
    public string|null $nrZleceniaTransportu;
    /**
     * Rodzaj ładunku
     * @var TLadunek|null
     */
    public TLadunek|null $opisLadunku;
    /**
     * Znacznik innego ładunku: 1 - inny ładunek
     * @var TWybor1|null
     */
    public TWybor1|null $ladunekInny;
    /**
     * Opis innego ładunku, w tym ładunek mieszany
     * @var string|null
     */
    public string|null $opisInnegoLadunku;
    /**
     * Jednostka opakowania
     * @var string|null
     */
    public string|null $jednostkaOpakowania;
    /**
     * Data i godzina rozpoczęcia transportu
     * @var string|null
     */
    public string|null $dataGodzRozpTransportu;
    /**
     * Data i godzina zakończenia transportu
     * @var string|null
     */
    public string|null $dataGodzZakTransportu;
    /**
     * Adres miejsca wysyłki
     * @var TAdres|null
     */
    public TAdres|null $wysylkaZ;
    /**
     * Adres pośredni wysyłki
     * @var TAdres[]
     */
    public array $wysylkaPrzez;
    /**
     * Adres miejsca docelowego, do którego został zlecony transport
     * @var TAdres|null
     */
    public TAdres|null $wysylkaDo;
    public static function schema(): array
    {
        return [
            'xmlName' => 'TransportType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "RodzajTransportu",
                    'type' => "tns:TRodzajTransportu",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "TransportInny",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "OpisInnegoTransportu",
                    'type' => "tns:TZnakowy50",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Przewoznik",
                    'type' => "tns:PrzewoznikType",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrZleceniaTransportu",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "OpisLadunku",
                    'type' => "tns:TLadunek",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "LadunekInny",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "OpisInnegoLadunku",
                    'type' => "tns:TZnakowy50",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "JednostkaOpakowania",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "DataGodzRozpTransportu",
                    'type' => "tns:TDataCzas",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "DataGodzZakTransportu",
                    'type' => "tns:TDataCzas",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "WysylkaZ",
                    'type' => "tns:TAdres",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "WysylkaPrzez",
                    'type' => "tns:TAdres",
                    'minOccurs' => 0,
                    'maxOccurs' => "20",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "WysylkaDo",
                    'type' => "tns:TAdres",
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