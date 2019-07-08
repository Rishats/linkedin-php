<?php

namespace Rishats\LinkedIn\Test\Endpoint;

use PHPUnit\Framework\TestCase;
use Rishats\LinkedIn\Client;
use Rishats\LinkedIn\Endpoint\EndpointBase;

class EndpointBaseTest extends TestCase
{
    public function testGetClientReturnAnExpectedInstance()
    {
        $client = $this->prophesize(Client::class);
        $endpointBase = new EndpointBase($client->reveal());

        $this->assertInstanceOf(Client::class, $endpointBase->getClient());
    }
}
