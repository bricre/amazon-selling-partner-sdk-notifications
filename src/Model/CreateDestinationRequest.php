<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the createDestination operation.
 */
class CreateDestinationRequest extends AbstractModel
{
    /**
     * The information required to create a destination resource. Applications should
     * use one resource type (sqs or eventBridge) per destination.
     *
     * @var \Amz\Notifications\Model\DestinationResourceSpecification
     */
    public $resourceSpecification = null;

    /**
     * A developer-defined name to help identify this destination.
     *
     * @var string
     */
    public $name = null;
}
