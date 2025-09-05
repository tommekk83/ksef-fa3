<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Enums;


/**
 * Rodzaj transportu
 */
enum TRodzajTransportu: string
{
    /** Transport morski */
    case TRANSPORT_MORSKI = '1';
    /** Transport kolejowy */
    case TRANSPORT_KOLEJOWY = '2';
    /** Transport drogowy */
    case TRANSPORT_DROGOWY = '3';
    /** Transport lotniczy */
    case TRANSPORT_LOTNICZY = '4';
    /** Przesyłka pocztowa */
    case PRZESYLKA_POCZTOWA = '5';
    /** Stałe instalacje przesyłowe */
    case INSTALACJE_PRZESYLOWE = '7';
    /** Żegluga śródlądowa */
    case ZEGLUGA_SRODLADOWA = '8';
}