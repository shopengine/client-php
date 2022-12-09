<?php

namespace SSB\Api;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

class LaravelClient extends Client
{
    public function handleError(\Exception $e, array $context): void
    {
        if (!\App::environment('production')) {
            $logContext = $context;

            $message = 'Undefined';

            if ($e !== null) {
                $logContext['trace'] = $e->getTrace();
                $message = $e->getMessage();
            }

            \Log::error($message, $logContext);

            if (
                get_class($e) === ServerException::class ||
                get_class($e) === ClientException::class
            ) {
                die($e->getResponse()->getBody() . '');
            }
            else {
                dd([$context, $e]);
            }
        }

        try {
            $hint        = new Sentry\EventHint();
            $hint->extra = $context;
            app('sentry')->captureException($e, $hint);
        }
        catch (\Exception $e) {
        }
    }

    public function eventStart(string $resource): void
    {
        event(new Event\Start($resource));
    }

    public function eventEnd(string $resource): void
    {
        event(new Event\End($resource));
    }
}
