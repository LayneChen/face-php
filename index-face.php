<?php
require __DIR__ . '/vendor/autoload.php';
$client = new \Face_recog_package\FaceRecogPackageClient('127.0.0.1:50000', [
    'credentials' => \Grpc\ChannelCredentials::createInsecure()
]);


$request = new \Face_recog_package\FaceServDetectRequest();
$request->setUserID(2);
$request->setMessage('test');
$request->setImage('23');
$get = $client->FaceServDetect($request)->wait();
print_r($get);
list($reply, $status) = $get;
$data[] = $reply->getMessage();
$data[] = $reply->getRetCode();
$data[] = $reply->getRetDets();
$data[] = $reply->getUserID();
var_dump($data);die;



