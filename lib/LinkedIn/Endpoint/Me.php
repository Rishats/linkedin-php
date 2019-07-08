<?php

namespace Rishats\LinkedIn\Endpoint;

use Rishats\LinkedIn\DataModel\BasicProfile;
use Rishats\LinkedIn\Transport\TransportInterface;

class Me extends EndpointBase
{
    const ENDPOINT_PATH = '/me';

    public function get()
    {
        $result =  $this->getClient()->doRequest(self::ENDPOINT_PATH, '', TransportInterface::METHOD_GET);

        $basicProfile = new BasicProfile();
        $basicProfile->initObjectByJson($result);

        return $basicProfile;
    }
}
