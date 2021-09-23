<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the deleteSubscriptionById operation.
 */
class DeleteSubscriptionByIdResponse extends AbstractModel
{
    /**
     * An unexpected condition occurred during the deleteSubscriptionById operation.
     *
     * @var \Amz\Notifications\Model\ErrorList
     */
    public $errors = null;
}
