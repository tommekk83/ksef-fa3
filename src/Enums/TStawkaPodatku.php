<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Enums;


/**
 * Stawka podatku
 */
enum TStawkaPodatku: string
{
    case STAWKA_23 = '23';
    case STAWKA_22 = '22';
    case STAWKA_8 = '8';
    case STAWKA_7 = '7';
    case STAWKA_5 = '5';
    case STAWKA_4 = '4';
    case STAWKA_3 = '3';
    /** Stawka 0% w przypadku sprzedaży towarów i świadczenia usług na terytorium kraju (z wyłączeniem WDT i eksportu) */
    case STAWKA_0_KRAJ = '0 KR';
    /** Stawka 0% w przypadku wewnątrzwspólnotowej dostawy towarów (WDT) */
    case STAWKA_0_WDT = '0 WDT';
    /** Stawka 0% w przypadku eksportu towarów */
    case STAWKA_0_EXPORT = '0 EX';
    /** zwolnione od podatku */
    case ZW = 'zw';
    /** odwrotne obciążenie */
    case OO = 'oo';
    /** niepodlegające opodatkowaniu- dostawy towarów oraz świadczenia usług poza terytorium kraju, z wyłączeniem transakcji, o których mowa w art. 100 ust. 1 pkt 4 ustawy oraz OSS */
    case NP_POZA_TERYT = 'np I';
    /** niepodlegajace opodatkowaniu na terytorium kraju, świadczenie usług o których mowa w art. 100 ust. 1 pkt 4 ustawy */
    case NP_KRAJ = 'np II';
}