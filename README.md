# KSeF FA(3) – Models, Serializer & Validator dla PHP 8

Biblioteka generowana na podstawie schematów XSD systemu KSeF **FA(3)**.  
Zawiera komplet modeli PHP, enumów, serializer XML oraz walidator zgodny z XSD.

## Zawartość

- `src/Model/*` – klasy PHP odwzorowujące struktury z XSD (np. `FakturaType`, `Podmiot1Type`, `FaType`, `FaWierszType`, `StopkaType`).
- `src/Enums/*` – typy wyliczeniowe (np. kody krajów, waluty, formy płatności).
- `src/Serializer/XmlSerializer.php` – serializer obiektów PHP → XML zgodny ze schematem.
- `src/Validator/XmlValidator.php` – walidator dokumentów XML względem XSD.
- `schema/*.xsd` – schematy użyte do generacji.

## Instalacja

```bash
composer require intermedia/ksef-fa3
```

## Przykład użycia

```php
<?php
require __DIR__.'/vendor/autoload.php';

use Intermedia\Ksef\Fa3\Model\FakturaType;
use Intermedia\Ksef\Fa3\Model\TNaglowek;
use Intermedia\Ksef\Fa3\Model\Podmiot1Type;
use Intermedia\Ksef\Fa3\Model\FaType;
use Intermedia\Ksef\Fa3\Model\FaWierszType;
use Intermedia\Ksef\Fa3\Serializer\XmlSerializer;
use Intermedia\Ksef\Fa3\Validator\XmlValidator;

// Tworzenie faktury
$faktura = new FakturaType();
$faktura->naglowek = new TNaglowek();
$faktura->podmiot1 = new Podmiot1Type();

$pozycja = new FaWierszType();
$fa = new FaType();
$fa->faWiersz = [$pozycja];
$faktura->fa = $fa;

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
```

## Typy i właściwości

- Każda klasa ma statyczną metodę `schema()`, która odwzorowuje definicję z XSD.
- Wszystkie właściwości mają PHPDoc (`@var`) z typem oraz opisem z dokumentacji XSD – dzięki temu IDE (PHPStorm, VSCode) podpowiada pola i opisy.

## Licencja

MIT
