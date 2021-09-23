<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The information required to create an Amazon EventBridge destination.
 */
class EventBridgeResourceSpecification extends AbstractModel
{
    /**
     * The AWS region in which you will be receiving the notifications.
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
