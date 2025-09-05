<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Enums;


/**
 * Rodzaj faktury
 */
enum TRodzajFaktury: string
{
    /** Faktura podstawowa */
    case VAT = 'VAT';
    /** Faktura korygująca */
    case KOR = 'KOR';
    /** Faktura dokumentująca otrzymanie zapłaty lub jej części przed dokonaniem czynności oraz faktura wystawiona w związku z art. 106f ust. 4 ustawy (faktura zaliczkowa) */
    case ZAL = 'ZAL';
    /** Faktura wystawiona w związku z art. 106f ust. 3 ustawy */
    case ROZ = 'ROZ';
    /** Faktura, o której mowa w art. 106e ust. 5 pkt 3 ustawy */
    case UPR = 'UPR';
    /** Faktura korygująca fakturę dokumentującą otrzymanie zapłaty lub jej części przed dokonaniem czynności oraz fakturę wystawioną w związku z art. 106f ust. 4 ustawy (faktura korygująca fakturę zaliczkową) */
    case KOR_ZAL = 'KOR_ZAL';
    /** Faktura korygująca fakturę wystawioną w związku z art. 106f ust. 3 ustawy */
    case KOR_ROZ = 'KOR_ROZ';
}