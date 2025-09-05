<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Enums;


/**
 * Status podatnika
 */
enum TStatusInfoPodatnika: string
{
    /** Podatnik znajdujący się w stanie likwidacji */
    case W_LIKWIDACJI = '1';
    /** Podatnik, który jest w trakcie postępowania restrukturyzacyjnego */
    case W_RESTRUKTURYZACJI = '2';
    /** Podatnik znajdujący się w stanie upadłości */
    case W_UPADLOSCI = '3';
    /** Przedsiębiorstwo w spadku */
    case PRZEDSIEBIORSTWO_W_SPADKU = '4';
}