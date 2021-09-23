<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The destination resource types.
 */
class DestinationResource extends AbstractModel
{
    /**
     * An Amazon Simple Queue Service (SQS) queue destination.
     *
     * @var \Amz\Notifications\Model\SqsResource
     */
    public $sqs = null;

    /**
     * An Amazon EventBridge destination.
     *
     * @var \Amz\Notifications\Model\EventBridgeResource
     */
    public $eventBridge = null;
}
