<?php

namespace Amz\Notifications\Api;

use Amz\Notifications\Model\CreateDestinationRequest as CreateDestinationRequest;
use Amz\Notifications\Model\CreateDestinationResponse as CreateDestinationResponse;
use Amz\Notifications\Model\CreateSubscriptionRequest as CreateSubscriptionRequest;
use Amz\Notifications\Model\CreateSubscriptionResponse as CreateSubscriptionResponse;
use Amz\Notifications\Model\DeleteDestinationResponse as DeleteDestinationResponse;
use Amz\Notifications\Model\DeleteSubscriptionByIdResponse as DeleteSubscriptionByIdResponse;
use Amz\Notifications\Model\GetDestinationResponse as GetDestinationResponse;
use Amz\Notifications\Model\GetDestinationsResponse as GetDestinationsResponse;
use Amz\Notifications\Model\GetSubscriptionByIdResponse as GetSubscriptionByIdResponse;
use Amz\Notifications\Model\GetSubscriptionResponse as GetSubscriptionResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Notifications extends AbstractAPI
{
    /**
     * Returns information about subscriptions of the specified notification type. You
     * can use this API to get subscription information when you do not have a
     * subscription identifier.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return GetSubscriptionResponse
     */
    public function getSubscription(): GetSubscriptionResponse
    {
        return $this->client->request('getSubscription', 'GET', 'notifications/v1/subscriptions/{notificationType}',
            [
            ]
        );
    }

    /**
     * Creates a subscription for the specified notification type to be delivered to
     * the specified destination. Before you can subscribe, you must first create the
     * destination by calling the createDestination operation.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param CreateSubscriptionRequest $Model Creates a subscription for the
     *                                         specified notification type to be delivered to the specified destination. Before
     *                                         you can subscribe, you must first create the destination by calling the
     *                                         createDestination operation.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return CreateSubscriptionResponse
     */
    public function createSubscription(CreateSubscriptionRequest $Model): CreateSubscriptionResponse
    {
        return $this->client->request('createSubscription', 'POST', 'notifications/v1/subscriptions/{notificationType}',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns information about a subscription for the specified notification type.
     * The getSubscriptionById API is grantless. For more information, see "Grantless
     * operations" in the Selling Partner API Developer Guide.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $subscriptionId The identifier for the subscription that you want to get
     *
     * @return GetSubscriptionByIdResponse|GetSubscriptionResponse
     */
    public function getSubscriptionById($subscriptionId)
    {
        return $this->client->request('getSubscriptionById', 'GET', "notifications/v1/subscriptions/{notificationType}/{$subscriptionId}",
            [
            ]
        );
    }

    /**
     * Deletes the subscription indicated by the subscription identifier and
     * notification type that you specify. The subscription identifier can be for any
     * subscription associated with your application. After you successfully call this
     * operation, notifications will stop being sent for the associated subscription.
     * The deleteSubscriptionById API is grantless. For more information, see
     * "Grantless operations" in the Selling Partner API Developer Guide.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $subscriptionId The identifier for the subscription that you want to
     * delete
     *
     * @return DeleteSubscriptionByIdResponse
     */
    public function deleteSubscriptionById($subscriptionId): DeleteSubscriptionByIdResponse
    {
        return $this->client->request('deleteSubscriptionById', 'DELETE', "notifications/v1/subscriptions/{notificationType}/{$subscriptionId}",
            [
            ]
        );
    }

    /**
     * Returns information about all destinations. The getDestinations API is
     * grantless. For more information, see "Grantless operations" in the Selling
     * Partner API Developer Guide.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return GetDestinationsResponse
     */
    public function getDestinations(): GetDestinationsResponse
    {
        return $this->client->request('getDestinations', 'GET', 'notifications/v1/destinations',
            [
            ]
        );
    }

    /**
     * Creates a destination resource to receive notifications. The createDestination
     * API is grantless. For more information, see "Grantless operations" in the
     * Selling Partner API Developer Guide.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param CreateDestinationRequest $Model Creates a destination resource to
     *                                        receive notifications. The createDestination API is grantless. For more
     *                                        information, see "Grantless operations" in the Selling Partner API Developer
     *                                        Guide.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return CreateDestinationResponse
     */
    public function createDestination(CreateDestinationRequest $Model): CreateDestinationResponse
    {
        return $this->client->request('createDestination', 'POST', 'notifications/v1/destinations',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns information about the destination that you specify. The getDestination
     * API is grantless. For more information, see "Grantless operations" in the
     * Selling Partner API Developer Guide.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $destinationId The identifier generated when you created the destination
     *
     * @return GetDestinationResponse
     */
    public function getDestination($destinationId): GetDestinationResponse
    {
        return $this->client->request('getDestination', 'GET', "notifications/v1/destinations/{$destinationId}",
            [
            ]
        );
    }

    /**
     * Deletes the destination that you specify. The deleteDestination API is
     * grantless. For more information, see "Grantless operations" in the Selling
     * Partner API Developer Guide.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $destinationId The identifier for the destination that you want to
     * delete
     *
     * @return DeleteDestinationResponse
     */
    public function deleteDestination($destinationId): DeleteDestinationResponse
    {
        return $this->client->request('deleteDestination', 'DELETE', "notifications/v1/destinations/{$destinationId}",
            [
            ]
        );
    }
}
