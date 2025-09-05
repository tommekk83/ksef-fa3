<?php
require __DIR__.'/vendor/autoload.php';

use Intermedia\Ksef\Fa3\Enums\TKodFormularza;
use Intermedia\Ksef\Fa3\Enums\TKodKraju;
use Intermedia\Ksef\Fa3\Enums\TKodWaluty;
use Intermedia\Ksef\Fa3\Enums\TRodzajFaktury;
use Intermedia\Ksef\Fa3\Enums\TStawkaPodatku;
use Intermedia\Ksef\Fa3\Enums\TWybor1;
use Intermedia\Ksef\Fa3\Enums\TWybor1_2;
use Intermedia\Ksef\Fa3\Enums\WariantFormularza;
use Intermedia\Ksef\Fa3\Model\AdnotacjeType;
use Intermedia\Ksef\Fa3\Model\FakturaType;
use Intermedia\Ksef\Fa3\Model\KodFormularzaType;
use Intermedia\Ksef\Fa3\Model\NoweSrodkiTransportuType;
use Intermedia\Ksef\Fa3\Model\PMarzyType;
use Intermedia\Ksef\Fa3\Model\Podmiot2Type;
use Intermedia\Ksef\Fa3\Model\TAdres;
use Intermedia\Ksef\Fa3\Model\TNaglowek;
use Intermedia\Ksef\Fa3\Model\Podmiot1Type;
use Intermedia\Ksef\Fa3\Model\FaType;
use Intermedia\Ksef\Fa3\Model\FaWierszType;
use Intermedia\Ksef\Fa3\Model\TPodmiot1;
use Intermedia\Ksef\Fa3\Model\TPodmiot2;
use Intermedia\Ksef\Fa3\Model\ZwolnienieType;
use Intermedia\Ksef\Fa3\Serializer\XmlSerializer;
use Intermedia\Ksef\Fa3\Validator\XmlValidator;

$kodFormularza = new KodFormularzaType();
$kodFormularza->value = TKodFormularza::FA;

$naglowek = new TNaglowek();
$naglowek->kodFormularza = $kodFormularza;
$naglowek->wariantFormularza = WariantFormularza::WARIANT_3;
$naglowek->dataWytworzeniaFa = '2025-09-03T00:00:00Z';

$tPodmiot1 = new TPodmiot1();
$tPodmiot1->nazwa = 'Nazwa firmy Sp. z o.o.';
$tPodmiot1->nIP = "5554443333";

$tPodmiot1TAdres = new TAdres();
$tPodmiot1TAdres->kodKraju = TKodKraju::PL;
$tPodmiot1TAdres->adresL1 = "ul. Mickiewicza 1";

$podmiot1Type = new Podmiot1Type();
$podmiot1Type->daneIdentyfikacyjne = $tPodmiot1;
$podmiot1Type->adres = $tPodmiot1TAdres;

$tPodmiot2 = new TPodmiot2();
$tPodmiot2->nazwa = 'Firma kupująca S.A.';
$tPodmiot2->nIP = "4443332211";

$tPodmiot2TAdres = new TAdres();
$tPodmiot2TAdres->kodKraju = TKodKraju::PL;
$tPodmiot2TAdres->adresL1 = "ul. Rynek 1";

$podmiot2Type = new Podmiot2Type();
$podmiot2Type->daneIdentyfikacyjne = $tPodmiot2;
$podmiot2Type->adres = $tPodmiot2TAdres;

$zwolnienieType = new ZwolnienieType();
$zwolnienieType->p19N = TWybor1::VAL_1;

$noweSrodkiTransportuType = new NoweSrodkiTransportuType();
$noweSrodkiTransportuType->p22N = TWybor1::VAL_1;

$pMarzyType = new PMarzyType();
$pMarzyType->pPMarzyN = TWybor1::VAL_1;

$adnotacje = new AdnotacjeType();
$adnotacje->p16 = TWybor1_2::VAL_2;
$adnotacje->p17 = TWybor1_2::VAL_2;
$adnotacje->p18 = TWybor1_2::VAL_2;
$adnotacje->p18A = TWybor1_2::VAL_2;
$adnotacje->p23 = TWybor1_2::VAL_2;
$adnotacje->zwolnienie = $zwolnienieType;
$adnotacje->noweSrodkiTransportu = $noweSrodkiTransportuType;
$adnotacje->pMarzy = $pMarzyType;

$faType = new FaType();
$faType->rodzajFaktury = TRodzajFaktury::VAT;
$faType->kodWaluty = TKodWaluty::PLN;
$faType->p1 = "2025-09-03";
$faType->p6 = "2025-09-03";
$faType->p2 = "FA/22/9/2025";
$faType->p131 = 100;
$faType->p141 = 23;
$faType->p15 = 123;
$faType->adnotacje = $adnotacje;

$faWiersz1Type = new FaWierszType();
$faWiersz1Type->p7 = "towar 1";
$faWiersz1Type->p8A = "szt.";
$faWiersz1Type->p8B = 1;
$faWiersz1Type->p9A = 100;
$faWiersz1Type->p11 = 100;
$faWiersz1Type->p12 = TStawkaPodatku::STAWKA_23;
$faWiersz1Type->nrWierszaFa = 1;

$faktura = new FakturaType();
$faktura->naglowek = $naglowek;
$faktura->podmiot1 = $podmiot1Type;
$faktura->podmiot2 = $podmiot2Type;
$faktura->fa = $faType;
$faktura->fa->faWiersz = [ $faWiersz1Type ];

// Serializacja do XML
$serializer = new XmlSerializer();
$doc = $serializer->createDocument('Faktura', $faktura);
echo $doc->saveXML();

// Walidacja względem XSD
$validator = new XmlValidator(__DIR__.'/vendor/intermedia/ksef/fa3/schema/FA3.xsd');
$result = $validator->validate($doc);

if ($result->isValid) {
    echo "Dokument jest poprawny względem XSD.";
} else {
    foreach ($result->errors as $error) {
        echo $error->message, PHP_EOL;
    }
}