<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Represents a destination created when you call the createDestination operation.
 */
class Destination extends AbstractModel
{
    /**
     * The developer-defined name for this destination.
     *
     * @var string
     */
    public $name = null;

    /**
     * The destination identifier generated when you created the destination.
     *
     * @var string
     */
    public $destinationId = null;

    /**
     * The resource that will receive notifications associated with this destination.
     *
     * @var \Amz\Notifications\Model\DestinationResource
     */
    public $resource = null;
}
