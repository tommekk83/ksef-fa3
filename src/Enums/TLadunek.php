<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Enums;


/**
 * Typy ładunków
 */
enum TLadunek: string
{
    /** Bańka */
    case BANKA = '1';
    /** Beczka */
    case BECZKA = '2';
    /** Butla */
    case BUTLA = '3';
    /** Karton */
    case KARTON = '4';
    /** Kanister */
    case KANISTER = '5';
    /** Klatka */
    case KLATKA = '6';
    /** Kontener */
    case KONTENER = '7';
    /** Kosz/koszyk */
    case KOSZ_KOSZYK = '8';
    /** Łubianka */
    case LUBIANKA = '9';
    /** Opakowanie zbiorcze */
    case OPAKOWANIE_ZBIORCZE = '10';
    /** Paczka */
    case PACZKA = '11';
    /** Pakiet */
    case PAKIET = '12';
    /** Paleta */
    case PALETA = '13';
    /** Pojemnik */
    case POJEMNIK = '14';
    /** Pojemnik do ładunków masowych stałych */
    case POJEMNIK_STALE = '15';
    /** Pojemnik do ładunków masowych w postaci płynnej */
    case POJEMNIK_PLYNNE = '16';
    /** Pudełko */
    case PUDELKO = '17';
    /** Puszka */
    case PUSZKA = '18';
    /** Skrzynia */
    case SKRZYNIA = '19';
    /** Worek */
    case WOREK = '20';
}