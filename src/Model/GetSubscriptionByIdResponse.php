<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getSubscriptionById operation.
 */
class GetSubscriptionByIdResponse extends AbstractModel
{
    /**
     * The payload for the getSubscriptionById operation.
     *
     * @var \Amz\Notifications\Model\Subscription
     */
    public $payload = null;

    /**
     * An unexpected condition occurred during the getSubscriptionById operation.
     *
     * @var \Amz\Notifications\Model\ErrorList
     */
    public $errors = null;
}
