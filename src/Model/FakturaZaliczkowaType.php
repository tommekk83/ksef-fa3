<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

use Intermedia\Ksef\Fa3\Enums\TWybor1;

class FakturaZaliczkowaType
{
    /**
     * Znacznik faktury zaliczkowej wystawionej poza KSeF
     * @var TWybor1|null
     */
    public TWybor1|null $nrKSeFZN;
    /**
     * Numer faktury zaliczkowej wystawionej poza KSeF. Pole obowiązkowe dla faktury wystawianej po wydaniu towaru lub wykonaniu usługi, o której mowa w art. 106f ust. 3 ustawy i ostatniej z faktur, o której mowa w art. 106f ust. 4 ustawy
     * @var string|null
     */
    public string|null $nrFaZaliczkowej;
    /**
     * Numer identyfikujący fakturę zaliczkową w KSeF. Pole obowiązkowe w przypadku, gdy faktura zaliczkowa była wystawiona za pomocą KSeF
     * @var string|null
     */
    public string|null $nrKSeFFaZaliczkowej;
    public static function schema(): array
    {
        return [
            'xmlName' => 'FakturaZaliczkowaType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "NrKSeFZN",
                    'type' => "etd:TWybor1",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrFaZaliczkowej",
                    'type' => "tns:TZnakowy",
                    'minOccurs' => 1,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "NrKSeFFaZaliczkowej",
                    'type' => "tns:TNumerKSeF",
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