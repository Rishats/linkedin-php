<?php

namespace Rishats\LinkedIn\Transport;

use Rishats\LinkedIn\Exception\RuntimeException;

class Factory
{
    public static function createTransport(): TransportInterface
    {
        if (extension_loaded('curl')) {
            return new CurlExtensionTransport();
        }

        throw new RuntimeException('Cannot create an HTTP transport object');
    }
}
