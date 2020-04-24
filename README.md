# Delivengo PHP SDK

## Requirements

 - PHP 5.3+
 - Composer
 - cURL
 - Delivengo API key
 
## Install

Using composer

```bash
composer require anthogirard/delivengo-sdk
```

## Usage

### Example of a request to list Mandats

```php
$client = new \DelivengoSDK\DelivengoClient('API_KEY');

$request = new \DelivengoSDK\Request\ListMandatsRequest();
$response = $client->send('list', $request);

/** @var \DelivengoSDK\Entity\Mandat[] $data */
$mandats = $response->getData();
foreach ($mandats as $mandat) {
    $rum = $mandat->getRum();
    $iban = $mandat->getIban();
    $bic = $mandat->getBic();
}
```

### Example of a request to retrieve a Envoi

```php
$client = new \DelivengoSDK\DelivengoClient('API_KEY');

$request = new \DelivengoSDK\Request\GetEnvoiRequest();
$response = $client->send('get', $request, ['id' => 1, 'support' => 4, 'position' => 2]);

/** @var \DelivengoSDK\Entity\Envoi $envoi */
$envoi = $response->getData();
$dateCreation = $envoi->getDateCreation();
$plis = $envoi->getPlis();
```
