<?php

namespace Revinate\RabbitMqBundle\Consumer;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Interface BatchConsumerInterface
 * @package Revinate\RabbitMqBundle\Consumer
 */
interface BatchConsumerInterface
{
    /**
     * @param \Revinate\RabbitMqBundle\Message\Message[] $messages
     * @return int
     */
    public function execute($messages);
}
