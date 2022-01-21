# Guzzle multibyte

Пакет для корректного обрезания ошибок при мультибайтовых ответах

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

