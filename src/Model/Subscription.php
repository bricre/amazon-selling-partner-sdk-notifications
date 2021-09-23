<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Represents a subscription to receive notifications.
 */
class Subscription extends AbstractModel
{
    /**
     * The subscription identifier generated when the subscription is created.
     *
     * @var string
     */
    public $subscriptionId = null;

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
