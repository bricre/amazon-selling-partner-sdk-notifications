<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the createSubscription operation.
 */
class CreateSubscriptionResponse extends AbstractModel
{
    /**
     * The payload for the createSubscription operation.
     *
     * @var \Amz\Notifications\Model\Subscription
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the createSubscription operation.
     *
     * @var \Amz\Notifications\Model\ErrorList
     */
    public $errors = null;
}
