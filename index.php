<?php
require __DIR__ . '/vendor/autoload.php';
$client = new \Rpc_package\HelloClient('127.0.0.1:5000', [
    'credentials' => \Grpc\ChannelCredentials::createInsecure()
]);

//$re = new \stdClass();
//$re->userId = 1;
//$re->mesage = '';
//$re->image = '';

$request = new \Rpc_package\HelloRequest();
$request->setName('22');
$get = $client->SayHello($request)->wait();
list($reply, $status) = $get;
$data = $reply->getMessage();
var_dump($data);die;



