<?php
require __DIR__ . '/vendor/autoload.php';
$client = new \Rpc_package\HelloClient('127.0.0.1:50000', [
    'credentials' => \Grpc\ChannelCredentials::createInsecure()
]);


$request = new \Rpc_package\HelloRequest();
$request->setName('22');
$get = $client->SayHello($request)->wait();
print_r($get);
list($reply, $status) = $get;
$data[] = $reply->getMessage();
$data[] = $reply->getScore();
$data[] = $reply->getNumber();
var_dump($data);die;



