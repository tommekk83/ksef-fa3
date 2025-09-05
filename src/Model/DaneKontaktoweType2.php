<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class DaneKontaktoweType2
{
    /**
     * Adres e-mail podmiotu upoważnionego
     * @var string|null
     */
    public string|null $emailPU;
    /**
     * Numer telefonu podmiotu upoważnionego
     * @var string|null
     */
    public string|null $telefonPU;
    public static function schema(): array
    {
        return [
            'xmlName' => 'DaneKontaktoweType4',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "EmailPU",
                    'type' => "etd:TAdresEmail",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "TelefonPU",
                    'type' => "tns:TNumerTelefonu",
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