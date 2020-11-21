<?php
require __DIR__ . '/vendor/autoload.php';
$client = new \Face_recog_package\FaceRecogPackageClient('127.0.0.1:8787', [
    'credentials' => \Grpc\ChannelCredentials::createInsecure()
]);


$request = new \Face_recog_package\FaceServDetectRequest();
$request->setUserID(2);
var_dump($request->getUserID());
$request->setMessage('test');
var_dump($request->getMessage());
$request->setImage('23');
var_dump($request->getImage());
$get = $client->FaceServDetect($request)->wait();
print_r($get);
list($reply, $status) = $get;
$data[] = $reply->getMessage();
$data[] = $reply->getRetCode();
$data[] = $reply->getRetDets();
$data[] = $reply->getUserID();
var_dump($data);die;



