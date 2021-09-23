<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Represents an Amazon EventBridge destination.
 */
class EventBridgeResource extends AbstractModel
{
    /**
     * The name of the partner event source associated with the destination.
     *
     * @var string
     */
    public $name = null;

    /**
     * The AWS region in which you receive the notifications. For AWS regions that are
     * supported in Amazon EventBridge, see
     * https://docs.aws.amazon.com/general/latest/gr/ev.html.
     *
     * @var string
     */
    public $region = null;

    /**
     * The identifier for the AWS account that is responsible for charges related to
     * receiving notifications.
     *
     * @var string
     */
    public $accountId = null;
}
