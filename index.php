<?php
require __DIR__ . '/vendor/autoload.php';

$client = new \Face\FaceRecogPackageClient('172.17.0.1:8787', [
    'credentials' => \Grpc\ChannelCredentials::createInsecure()
]);

$request = new \Face\FaceServDetectRequest([
    'userID' => 1,
    'message' => 'test',
    'image' => ''
]);
//$request->setImage('s');
//$request->setUserID('1');
//$request->setMessage('test');
print_r($request);exit;
$get = $client->FaceServDetct($request)->wait();

list($reply, $status) = $get;
$data = $reply->getMessage();
var_dump($data);die;



