<?php

namespace Amz\Notifications\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The information required to create an Amazon Simple Queue Service (Amazon SQS)
 * queue destination.
 */
class SqsResource extends AbstractModel
{
    /**
     * The Amazon Resource Name (ARN) associated with the SQS queue.
     *
     * @var string
     */
    public $arn = null;
}
