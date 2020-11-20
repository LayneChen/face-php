<?php
require __DIR__ . '/vendor/autoload.php';
print_r('welcome!');
$client = new \Face\FaceRecogPackageClient('127.0.0.1:8787', [
    'credentials' => \Grpc\ChannelCredentials::createInsecure()
]);

//$re = new \stdClass();
//$re->userId = 1;
//$re->mesage = '';
//$re->image = '';

$request = new \Face\FaceServDetectRequest();
$request->setImage('s');
$request->setUserID('1');
$request->setMessage('test');
$get = $client->FaceServDetct($request)->wait();
list($reply, $status) = $get;
$data = $reply->getMessage();
var_dump($data);die;



