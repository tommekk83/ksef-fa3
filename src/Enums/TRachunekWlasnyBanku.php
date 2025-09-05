<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Enums;


/**
 * Typy rachunków własnych
 */
enum TRachunekWlasnyBanku: string
{
    /** Rachunek banku lub rachunek spółdzielczej kasy oszczędnościowo-kredytowej służący do dokonywania rozliczeń z tytułu nabywanych przez ten bank lub tę kasę wierzytelności pieniężnych */
    case RACHUNEK_1 = '1';
    /** Rachunek banku lub rachunek spółdzielczej kasy oszczędnościowo-kredytowej wykorzystywany przez ten bank lub tę kasę do pobrania należności od nabywcy towarów lub usług za dostawę towarów lub świadczenie usług, potwierdzone fakturą, i przekazania jej w całości albo części dostawcy towarów lub usługodawcy */
    case RACHUNEK_2 = '2';
    /** Rachunek banku lub rachunek spółdzielczej kasy oszczędnościowo-kredytowej prowadzony przez ten bank lub tę kasę w ramach gospodarki własnej, niebędący rachunkiem rozliczeniowym */
    case RACHUNEK_3 = '3';
}