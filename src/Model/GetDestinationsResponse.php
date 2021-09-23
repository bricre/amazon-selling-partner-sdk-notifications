<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getDestinations operation.
 */
class GetDestinationsResponse extends AbstractModel
{
    /**
     * The payload for the getDestinations operation.
     *
     * @var \Amz\Notifications\Model\DestinationList
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the getDestinations operation.
     *
     * @var \Amz\Notifications\Model\ErrorList
     */
    public $errors = null;
}
