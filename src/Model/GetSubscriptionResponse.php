<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getSubscription operation.
 */
class GetSubscriptionResponse extends AbstractModel
{
    /**
     * The payload for the getSubscription operation.
     *
     * @var \Amz\Notifications\Model\Subscription
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the getSubscription operation.
     *
     * @var \Amz\Notifications\Model\ErrorList
     */
    public $errors = null;
}
