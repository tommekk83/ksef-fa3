<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Enums;


/**
 * Określa, czy to jest złożenie, czy korekta dokumentu
 */
enum TCelZlozenia: string
{
    /** złożenie po raz pierwszy deklaracji za dany okres */
    case ZLOZENIE = '1';
    /** korekta deklaracji za dany okres */
    case KOREKTA = '2';
}