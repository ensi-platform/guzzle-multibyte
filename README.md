# Guzzle multibyte

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ensi/guzzle-multibyte.svg?style=flat-square)](https://packagist.org/packages/ensi/guzzle-multibyte)
[![Tests](https://github.com/ensi-platform/guzzle-multibyte/actions/workflows/run-tests.yml/badge.svg?branch=master)](https://github.com/ensi-platform/guzzle-multibyte/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/ensi/guzzle-multibyte.svg?style=flat-square)](https://packagist.org/packages/ensi/guzzle-multibyte)

This package provides improved BodySummarizer() that can correctly handle and truncate large multibyte responses.

## Installation

You can install the package via composer:

```bash
composer require ensi/guzzle-multibyte
```

## Basic usage

```php
use Ensi\GuzzleMultibyte\BodySummarizer;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;

/** @var HandlerStack $handler */
$handler->push(Middleware::httpErrors(new BodySummarizer()), 'http_errors');

$client = new Client([
    'handler' => $handler,
]);
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

### Testing

1. composer install
2. composer test

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
