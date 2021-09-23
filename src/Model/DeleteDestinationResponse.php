<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the deleteDestination operation.
 */
class DeleteDestinationResponse extends AbstractModel
{
    /**
     * One or more unexpected errors occurred during the deleteDestination operation.
     *
     * @var \Amz\Notifications\Model\ErrorList
     */
    public $errors = null;
}
