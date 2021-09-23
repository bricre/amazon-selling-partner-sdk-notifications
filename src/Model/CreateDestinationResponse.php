<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the createDestination operation.
 */
class CreateDestinationResponse extends AbstractModel
{
    /**
     * The payload for the createDestination operation.
     *
     * @var \Amz\Notifications\Model\Destination
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the createDestination operation.
     *
     * @var \Amz\Notifications\Model\ErrorList
     */
    public $errors = null;
}
