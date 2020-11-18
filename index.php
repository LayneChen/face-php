<?php
require __DIR__ . '/vendor/autoload.php';

$client = new \Face_recog_package\FaceRecogPackage('127.0.0.1:50052', [
    'credentials' => \Grpc\ChannelCredentials::createInsecure()
]);
$request = new \Face_recog_package\FaceServDetectRequest();
$request->setImage('s');
$request->setUserID('1');
$request->setMessage('test');
$get = $client->FaceServDetct($request)->wait();

list($reply, $status) = $get;
$data = $reply->getMessage();
var_dump($data);die;
