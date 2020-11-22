<?php
require __DIR__ . '/vendor/autoload.php';
$client = new \Face_recog_package\FaceRecogPackageClient('127.0.0.1:8787', [
    'credentials' => \Grpc\ChannelCredentials::createInsecure()
]);


$request = new \Face_recog_package\FaceServ1VS1Request();
$request->setUserID(2);
$request->setMessage('test');
$request->setImage1('2341234');
$request->setImage2('2341234');
$requestMsg = new \Face_recog_package\FaceServRequestMsg();
$requestMsg->setType('2');
$requestMsg->setReq1Vs1($request);
$get = $client->FaceServ1VS1($requestMsg)->wait();
print_r($get);
list($reply, $status) = $get;
$data[] = $reply->getType();
$data[] = $reply->getRet1Vs1()->getMessage();
$data[] = $reply->getRet1Vs1()->getScore();
$data[] = $reply->getRet1Vs1()->getUserID();
var_dump($data);die;



