<?php

class Consumer extends CI_Controller {
    public function index() {
        $this->load->library('RabbitMQ');
        $queueName = 'my_queue';

        $this->rabbitmq->declareQueue($queueName);

        $this->rabbitmq->consumeMessages($queueName, function ($message) {
            echo 'Message received: ' . $message->body . PHP_EOL;
        });
    }
}
