# airwallex-php

[![Tests](https://github.com/vinkashq/airwallex-php/actions/workflows/tests.yml/badge.svg)](https://github.com/vinkashq/airwallex-php/actions/workflows/tests.yml) [![Packagist Version](https://img.shields.io/packagist/v/vinkas/airwallex?logo=packagist&logoColor=000000&label=version&labelColor=d9e0f3&color=f28d1a)](https://packagist.org/packages/vinkas/airwallex)

PHP SDK for Airwallex API

## Installation

The package [`vinkas/airwallex`](https://packagist.org/packages/vinkas/airwallex) can be installed using composer via Packagist.

```
composer require vinkas/airwallex
```

## Configuration

Set the Airwallex Client ID and API Key values in Environment variables using the keys `AIRWALLEX_CLIENT_ID` and `AIRWALLEX_API_KEY`.

## Usage

Create a new `Client` instance and get the balances related endpoints like below

```php
use Vinkas\Airwallex\Client;

$client = new Client();

$balances = $client->getBalances()->getCurrent()->array();

$balanceHistory = $client->getBalances()->getHistory()->object(); // Result will include records for the last 7 days by default
$balanceHistory = $client->getBalances()->getHistory($from, $to)->object(); // $from & $to - any dates in ISO8601 format. max time range - 7 days
```

For more API-related details refer to https://www.airwallex.com/docs/api
