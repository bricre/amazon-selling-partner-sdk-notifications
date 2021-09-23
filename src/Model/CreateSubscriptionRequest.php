<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the createSubscription operation.
 */
class CreateSubscriptionRequest extends AbstractModel
{
    /**
     * The version of the payload object to be used in the notification.
     *
     * @var string
     */
    public $payloadVersion = null;

    /**
     * The identifier for the destination where notifications will be delivered.
     *
     * @var string
     */
    public $destinationId = null;
}
