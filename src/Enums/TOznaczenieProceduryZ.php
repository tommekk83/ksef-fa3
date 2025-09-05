<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Enums;


/**
 * Oznaczenia dotyczące procedur dla zamówień
 */
enum TOznaczenieProceduryZ: string
{
    /** Oznaczenie dotyczące procedury, o której mowa w § 10 ust. 4 pkt 2a rozporządzenia w sprawie szczegółowego zakresu danych zawartych w deklaracjach podatkowych i w ewidencji w zakresie podatku od towarów i usług */
    case WSTO_EE = 'WSTO_EE';
    /** Oznaczenie dotyczące procedury, o której mowa w § 10 ust. 4 pkt 2b rozporządzenia w sprawie szczegółowego zakresu danych zawartych w deklaracjach podatkowych i w ewidencji w zakresie podatku od towarów i usług */
    case IED = 'IED';
    /** Oznaczenie dotyczące procedury, o której mowa w § 10 ust. 4 pkt 5 rozporządzenia w sprawie szczegółowego zakresu danych zawartych w deklaracjach podatkowych i w ewidencji w zakresie podatku od towarów i usług */
    case TT_D = 'TT_D';
    /** Oznaczenie dotyczące procedury, o której mowa w § 10 ust. 4 pkt 10 rozporządzenia w sprawie szczegółowego zakresu danych zawartych w deklaracjach podatkowych i w ewidencji w zakresie podatku od towarów i usług */
    case B_SPV = 'B_SPV';
    /** Oznaczenie dotyczące procedury, o której mowa w § 10 ust. 4 pkt 11 rozporządzenia w sprawie szczegółowego zakresu danych zawartych w deklaracjach podatkowych i w ewidencji w zakresie podatku od towarów i usług */
    case B_SPV_DOSTAWA = 'B_SPV_DOSTAWA';
    /** Oznaczenie dotyczące procedury, o której mowa w § 10 ust. 4 pkt 12 rozporządzenia w sprawie szczegółowego zakresu danych zawartych w deklaracjach podatkowych i w ewidencji w zakresie podatku od towarów i usług */
    case B_MPV_PROWIZJA = 'B_MPV_PROWIZJA';
}