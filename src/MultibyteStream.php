<?php

namespace Ensi\GuzzleMultibyte;

use GuzzleHttp\Psr7\StreamDecoratorTrait;
use Psr\Http\Message\StreamInterface;

class MultibyteStream implements StreamInterface
{
    use StreamDecoratorTrait;

    public function __construct(StreamInterface $stream)
    {
        $this->stream = $stream;
    }

    /**
     * @inheritDoc
     */
    public function read($length)
    {
        return mb_substr($this->stream->getContents(), 0, $length);
    }
}