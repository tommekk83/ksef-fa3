<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Model;

class DaneKontaktoweType
{
    /**
     * Adres e-mail
     * @var string|null
     */
    public string|null $email;
    /**
     * Numer telefonu
     * @var string|null
     */
    public string|null $telefon;
    public static function schema(): array
    {
        return [
            'xmlName' => 'DaneKontaktoweType',
            'xmlNamespace' => 'http://crd.gov.pl/wzor/2025/06/25/13775/',
            'content' => 'complex',
            'compositor' => 'mixed',
            'elements' => [
                [
                    'name' => "Email",
                    'type' => "etd:TAdresEmail",
                    'minOccurs' => 0,
                    'maxOccurs' => "1",
                    'ns' => "http://crd.gov.pl/wzor/2025/06/25/13775/",
                ],
                [
                    'name' => "Telefon",
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