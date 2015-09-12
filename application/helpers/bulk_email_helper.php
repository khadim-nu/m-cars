<?php
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;

function send_mail($to, $from, $from_password, $message) {
    define('HOST', 'localhost');
    define('PORT', 5672);
    define('USER', 'guest');
    define('PASS', 'guest');
    define('VHOST', '/');

//If this is enabled you can see AMQP output on the CLI
//    define('AMQP_DEBUG', true);


    $exchange = 'tester';
    $queue = 'test_queue';

    $conn = new AMQPConnection(HOST, PORT, USER, PASS, VHOST);
    $ch = $conn->channel();

    /*
      The following code is the same both in the consumer and the producer.
      In this way we are sure we always have a queue to consume from and an
      exchange where to publish messages.
     */

    /*
      name: $queue
      passive: false
      durable: true // the queue will survive server restarts
      exclusive: false // the queue can be accessed in other channels
      auto_delete: false //the queue won't be deleted once the channel is closed.
     */
    $ch->queue_declare($queue, false, false, false, false);

    /*
      name: $exchange
      type: direct
      passive: false
      durable: true // the exchange will survive server restarts
      auto_delete: false //the exchange won't be deleted once the channel is closed.
     */

    $ch->exchange_declare($exchange, 'fanout', false, false, false);

    $ch->queue_bind($queue, $exchange, "");

    $msg_body = array("to" => $to, "from" => $from,"from_pass"=> $from_password, "message" => $message);
    $msg_body = json_encode($msg_body);
//    $msg_body = 'hello kamil';
    $msg = new AMQPMessage($msg_body, array('content_type' => 'text/plain', 'delivery_mode' => 2));
    $ch->basic_publish($msg, $exchange);

    $ch->close();
    $conn->close();
}

