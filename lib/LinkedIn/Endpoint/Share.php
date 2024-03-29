<?php

namespace Rishats\LinkedIn\Endpoint;

use Rishats\LinkedIn\DataModel\ShareResponse;
use Rishats\LinkedIn\DataModel\Shares;
use Rishats\LinkedIn\Transport\TransportInterface;

class Share extends EndpointBase
{
    const ENDPOINT_PATH = '/shares';

    public function postShares(Shares $shares)
    {
        $result = $this->getClient()->doRequest(self::ENDPOINT_PATH, $shares->jsonSerialize(), TransportInterface::METHOD_POST);

        $shareResponse = new ShareResponse();
        $shareResponse->initObjectByJson($result);

        return $shareResponse;
    }
}
