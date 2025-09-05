<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Enums;


/**
 * Typy form płatności
 */
enum TFormaPlatnosci: string
{
    /** Gotówka */
    case GOTOWKA = '1';
    /** Karta */
    case KARTA = '2';
    /** Bon */
    case BON = '3';
    /** Czek */
    case CZEK = '4';
    /** Kredyt */
    case KREDYT = '5';
    /** Przelew */
    case PRZELEW = '6';
    /** Mobilna */
    case MOBILNA = '7';
}