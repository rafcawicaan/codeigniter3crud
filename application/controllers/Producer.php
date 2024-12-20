<?php

class Producer extends CI_Controller {
    public function index() {
        $this->load->library('RabbitMQ');
        $queueName = 'my_queue';
        $this->rabbitmq->declareQueue($queueName);

        $message = "Hello RabbitMQ!";
        $this->rabbitmq->publishMessage($queueName, $message);

        echo "Message sent: $message";
    }
}
