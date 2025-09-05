<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class NowySrodekTransportuType
{
    /**
     * Data dopuszczenia nowego środka transportu do użytku
     * @var string|null
     */
    public string|null $p22A;
    /**
     * Numer wiersza faktury, w którym wykazano dostawę nowego środka transportu
     * @var string|null
     */
    public string|null $pNrWierszaNST;
    /**
     * Marka nowego środka transportu
     * @var string|null
     */
    public string|null $p22BMK;
    /**
     * Model nowego środka transportu
     * @var string|null
     */
    public string|null $p22BMD;
    /**
     * Kolor nowego środka transportu
     * @var string|null
     */
    public string|null $p22BK;
    /**
     * Numer rejestracyjny nowego środka transportu
     * @var string|null
     */
    public string|null $p22BNR;
    /**
     * Rok produkcji nowego środka transportu
     * @var string|null
     */
    public string|null $p22BRP;
    /**
     * Jeśli dostawa dotyczy pojazdów lądowych, o których mowa w art. 2 pkt 10 lit. a ustawy, należy podać przebieg pojazdu
     * @var string|null
     */
    public string|null $p22B;
    /**
     * Jeśli dostawa dotyczy pojazdów lądowych, o których mowa w art. 2 pkt 10 lit. a ustawy, można podać numer VIN
     * @var string|null
     */
    public string|null $p22B1;
    /**
     * Jeśli dostawa dotyczy pojazdów lądowych, o których mowa w art. 2 pkt 10 lit. a ustawy, można podać numer nadwozia
     * @var string|null
     */
    public string|null $p22B2;
    /**
     * Jeśli dostawa dotyczy pojazdów lądowych, o których mowa w art. 2 pkt 10 lit. a ustawy, można podać numer podwozia
     * @var string|null
     */
    public string|null $p22B3;
    /**
     * Jeśli dostawa dotyczy pojazdów lądowych, o których mowa w art. 2 pkt 10 lit. a ustawy, można podać numer ramy
     * @var string|null
     */
    public string|null $p22B4;
    /**
     * Jeśli dostawa dotyczy pojazdów lądowych, o których mowa w art. 2 pkt 10 lit. a ustawy, można podać typ nowego środka transportu
     * @var string|null
     */
    public string|null $p22BT;
    /**
     * Jeśli dostawa dotyczy jednostek pływających, o których mowa w art. 2 pkt 10 lit. b ustawy, należy podać liczbę godzin roboczych używania nowego środka transportu
     * @var string|null
     */
    public string|null $p22C;
    /**
     * Jeśli dostawa dotyczy jednostek pływających, o których mowa w art. 2 pkt 10 lit. b ustawy, można podać numer kadłuba nowego środka transportu
     * @var string|null
     */
    public string|null $p22C1;
    /**
     * Jeśli dostawa dotyczy statków powietrznych, o których mowa w art. 2 pkt 10 lit. c ustawy, należy podać liczbę godzin roboczych używania nowego środka transportu
     * @var string|null
     */
    public string|null $p22D;
    /**
     * Jeśli dostawa dotyczy statków powietrznych, o których mowa w art. 2 pkt 10 lit. c ustawy, można podać numer fabryczny nowego środka transportu
     * @var string|null
     */
    public string|null $p22D1;
    public static function schema(): array
    {
        return [
            'xmlName' => 'NowySrodekTransportuType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "P_22A",
                    'type' => "tns:TDataT",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_NrWierszaNST",
                    'type' => "tns:TNaturalny",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22BMK",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22BMD",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22BK",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22BNR",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22BRP",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22B",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22B1",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22B2",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22B3",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22B4",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22BT",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22C",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22C1",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22D",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "P_22D1",
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