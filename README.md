# Guzzle multibyte

This package provides improved BodySummarizer() that can correctly handle and truncate large multibyte responses.

## Установка

1. `composer require ensi/guzzle-multibyte`
2.
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

