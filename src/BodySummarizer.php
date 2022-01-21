<?php

namespace Ensi\GuzzleMultibyte;

use GuzzleHttp\BodySummarizer as GuzzleBodySummarizer;
use GuzzleHttp\BodySummarizerInterface;
use GuzzleHttp\Psr7\Stream;
use Psr\Http\Message\MessageInterface;

class BodySummarizer implements BodySummarizerInterface
{
    public function __construct(protected ?int $truncateAt = null)
    {
    }

    /**
     * @inheritDoc
     */
    public function summarize(MessageInterface $message): ?string
    {
        if ($message->getBody() instanceof Stream) {
            $message = $message->withBody(new MultibyteStream($message->getBody()));
        }

        return (new GuzzleBodySummarizer($this->truncateAt))->summarize($message);
    }
}
