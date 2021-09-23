<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The information required to create a destination resource. Applications should
 * use one resource type (sqs or eventBridge) per destination.
 */
class DestinationResourceSpecification extends AbstractModel
{
    /**
     * The information required to create an Amazon Simple Queue Service (SQS) queue
     * destination.
     *
     * @var \Amz\Notifications\Model\SqsResource
     */
    public $sqs = null;

    /**
     * The information required to create an Amazon EventBridge destination.
     *
     * @var \Amz\Notifications\Model\EventBridgeResourceSpecification
     */
    public $eventBridge = null;
}
