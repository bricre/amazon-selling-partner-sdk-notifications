<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getDestination operation.
 */
class GetDestinationResponse extends AbstractModel
{
    /**
     * The payload for the getDestination operation.
     *
     * @var \Amz\Notifications\Model\Destination
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the getDestination operation.
     *
     * @var \Amz\Notifications\Model\ErrorList
     */
    public $errors = null;
}
