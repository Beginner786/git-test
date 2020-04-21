<?php
require __DIR__ . '/twilio-php-latest/Twilio/autoload.php';
use Twilio\Rest\Client;
$client = new Client($sid, $token);
$client->messages->create(
 '+918121363420', // number to send to
 array(
 'from' => '+15017250604', // your Twilio number
 'body' => "There’s something strange in my neighborhood. I don’t know who to call. Send help!"
 )
);