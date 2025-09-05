<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Enums;


/**
 * Rola podmiotu upoważnionego
 */
enum TRolaPodmiotuUpowaznionego: string
{
    /** Organ egzekucyjny - w przypadku, o którym mowa w art. 106c pkt 1 ustawy */
    case ORGAN_OGZEKUCYJNY = '1';
    /** Komornik sądowy - w przypadku, o którym mowa w art. 106c pkt 2 ustawy */
    case KOMORNIK_SADOWY = '2';
    /** Przedstawiciel podatkowy - w przypadku gdy na fakturze występują dane przedstawiciela podatkowego, o którym mowa w art. 18a - 18d ustawy */
    case PRZEDSTAWICIEL_PODATKOWY = '3';
}