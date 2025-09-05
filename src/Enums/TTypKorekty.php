<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Enums;


/**
 * Typ skutku korekty w ewidencji dla podatku od towarów i usług
 */
enum TTypKorekty: string
{
    /** Korekta skutkująca w dacie ujęcia faktury pierwotnej */
    case KOREKTA_1 = '1';
    /** Korekta skutkująca w dacie wystawienia faktury korygującej */
    case KOREKTA_2 = '2';
    /** Korekta skutkująca w dacie innej, w tym gdy dla różnych pozycji faktury korygującej daty te są różne */
    case KOREKTA_3 = '3';
}