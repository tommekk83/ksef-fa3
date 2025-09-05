<?php
declare(strict_types=1);

namespace Intermedia\Ksef\Fa3\Enums;


/**
 * Rola podmiotu trzeciego
 */
enum TRolaPodmiotu3: string
{
    /** Faktor - w przypadku gdy na fakturze występują dane faktora */
    case FAKTOR = '1';
    /** Odbiorca - w przypadku gdy na fakturze występują dane jednostek wewnętrznych, oddziałów, wyodrębnionych w ramach nabywcy, które same nie stanowią nabywcy w rozumieniu ustawy */
    case ODBIORCA = '2';
    /** Podmiot pierwotny - w przypadku gdy na fakturze występują dane podmiotu będącego w stosunku do podatnika podmiotem przejętym lub przekształconym, który dokonywał dostawy lub świadczył usługę. Z wyłączeniem przypadków, o których mowa w art. 106j ust.2 pkt 3 ustawy, gdy dane te wykazywane są w części Podmiot1K */
    case PIERWOTNY = '3';
    /** Dodatkowy nabywca - w przypadku gdy na fakturze występują dane kolejnych (innych niż wymieniony w części Podmiot2) nabywców */
    case DODATKOWY_NABYWCA = '4';
    /** Wystawca faktury - w przypadku gdy na fakturze występują dane podmiotu wystawiającego fakturę w imieniu podatnika. Nie dotyczy przypadku, gdy wystawcą faktury jest nabywca */
    case WYSTAWCA_FAKTURY = '5';
    /** Dokonujący płatności - w przypadku gdy na fakturze występują dane podmiotu regulującego zobowiązanie w miejsce nabywcy */
    case _PLATNOSCI = '6';
    /** Jednostka samorządu terytorialnego - wystawca */
    case JST_WYSTAWCA = '7';
    /** Jednostka samorządu terytorialnego - odbiorca */
    case JST_ODBIORCA = '8';
    /** Członek grupy VAT - wystawca */
    case GV_WYSTAWCA = '9';
    /** Członek grupy VAT - odbiorca */
    case GW_ODBIORCA = '10';
    /** Pracownik */
    case PRACOWNIK = '11';
}