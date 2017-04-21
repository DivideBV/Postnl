# PostNL CIF

[![Latest Stable Version](https://poser.pugx.org/dividebv/postnl/v/stable)](https://packagist.org/packages/dividebv/postnl)
[![Total Downloads](https://poser.pugx.org/dividebv/postnl/downloads)](https://packagist.org/packages/dividebv/postnl)
[![Latest Unstable Version](https://poser.pugx.org/dividebv/postnl/v/unstable)](https://packagist.org/packages/dividebv/postnl)
[![License](https://poser.pugx.org/dividebv/postnl/license)](https://packagist.org/packages/dividebv/postnl)

This is a library to interface with the SOAP services offered by
[PostNL](http://postnl.nl/), called CIF.

# Installation

Install the latest version with

```bash
composer require dividebv/postnl
```

# Implementation Status

This library is not complete. This table lists which services are implemented
and which aren't. The list of existing services is taken from
[PostNL's developer center](https://developer.postnl.nl/).

| Service                   | Implemented | Version |
|---------------------------|:-----------:|:-------:|
| Adrescheck Nationaal      |      ✗      |   N/A   |
| Geo Adrescheck Nationaal  |      ✗      |   N/A   |
| Adrescheck Internationaal |      ✗      |   N/A   |
| Bulkmail Webservice       |      ✗      |   N/A   |
| IBANcheck Nationaal       |      ✗      |   N/A   |
| Kredietcheck Consument Basis |      ✗      |   N/A   |
| Kredietcheck Consument Premium |      ✗      |   N/A   |
| Barcode Webservice        |      ✓      |   1_1   |
| Labelling Webservice      |      ✓      |   2_0   |
| Confirming Webservice     |      ✓      |   1_9   |
| Deliverydate Webservice   |      ✓      |   2_1   |
| Timeframe Webservice      |      ✓      |   2_0   |
| Location Webservice       |      ✓      |   2_1   |
| Shippingstatus Webservice |      ✓      |   1_6   |

# Example

```php
use DivideBV\Postnl\Postnl;
use DivideBV\Postnl\ComplexTypes;

// Create client class using credentials received from PostNL.
$client = new Postnl(
    12345678,   // Customer number
    'ABCD',     // Customer code
    'Acme BV',  // Customer name
    'Acme',     // Username
    'Password', // Password
    123456,     // Collection location
    'CD1234',   // Globalpack
    true        // Whether to use PostNL's sandbox environment.
);

/**
 * Jan Smit
 * Smit & Zonen
 * Hoofdstraat 1A
 * 1234 AB Heikant
 * The Netherlands
 */
$receiverAddress = ComplexTypes\Address::create()
    ->setAddressType('01')
    ->setFirstName('Jan')
    ->setName('Smit')
    ->setCompanyName('Smit & Zonen')
    ->setStreet('Hoofdstraat')
    ->setHouseNr('1')
    ->setHouseNrExt('A')
    ->setZipcode('1234AB')
    ->setCity('Heikant')
    ->setCountrycode('NL');

$senderAddress = ComplexTypes\Address::create()
    ->setAddressType('02')
    ->setFirstName('Robert')
    ->setName('Jansen')
    ->setCompanyName('Jansen & Janssen')
    ->setStreet('Hoofdstraat')
    ->setHouseNr('999')
    ->setHouseNrExt('B')
    ->setZipcode('1234AB')
    ->setCity('Heikant')
    ->setCountrycode('NL');

// Request a barcode from PostNL.
$barcode = $client->generateBarcodeByDestination($receiverAddress->getCountryCode());

// Create a shipment.
$shipment = ComplexTypes\Shipment::create()
    ->setAddresses(new ComplexTypes\ArrayOfAddress([
        $receiverAddress,
        $senderAddress,
    ]))
    ->setBarcode($barcode)
    ->setDimension(ComplexTypes\Dimension::create()
        ->setWeight(5000) // Weight in g
        ->setWidth(215)   // Width in mm
        ->setLength(305)  // Length in mm
        ->setHeight(280)  // Height in mm
    )
    ->setProductCodeDelivery('3085');

// Generate label and confirm shipment.
$result = $client->generateLabel($shipment);

// Save the label PDF locally.
$label = $result->getLabels()[0];
$file = new \SplFileObject("label.pdf", 'w');
$file->fwrite($label->getContent());

```
