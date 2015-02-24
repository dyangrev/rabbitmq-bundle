<?php

namespace Revinate\RabbitMqBundle\Consumer;

/**
 * Class DeliveryResponse
 * @package Revinate\RabbitMqBundle\Consumer
 */
class DeliveryResponse {

    /**
     * Flag for message ack
     */
    const MSG_ACK = 1;
    /**
     * Flag single for message nack and requeue
     */
    const MSG_SINGLE_NACK_REQUEUE = 2;
    /**
     * Flag for reject and requeue
     */
    const MSG_REJECT_REQUEUE = 0;
    /**
     * Flag for reject and drop
     */
    const MSG_REJECT = -1;

    /**
     * Rejects and Republishes to the exchange
     */
    const MSG_REJECT_REPUBLISH = 3;
}