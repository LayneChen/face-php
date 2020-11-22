<?php
require __DIR__ . '/vendor/autoload.php';
$client = new \Face_recog_package\FaceRecogPackageClient('127.0.0.1:8787', [
    'credentials' => \Grpc\ChannelCredentials::createInsecure()
]);

// FaceServDetect
echo "FaceServDetect :";
$request = new \Face_recog_package\FaceServDetectRequest();
$request->setUserID(2);
$request->setMessage('test');
$request->setImage('2341234');
$requestMsg = new \Face_recog_package\FaceServRequestMsg();
$requestMsg->setType('1');
$requestMsg->setReqDet($request);
$get = $client->FaceServDetect($requestMsg)->wait();
print_r($get);
list($reply, $status) = $get;
$data['type'] = $reply->getType();
$data['message'] = $reply->getRetDet()->getMessage();
$data['retCode'] = $reply->getRetDet()->getRetCode();
$data['userId'] = $reply->getRetDet()->getUserID();
var_dump($data);

// FaceServ1VS1
echo "FaceServ1VS1 :";
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
$data['type'] = $reply->getType();
$data['message'] = $reply->getRet1Vs1()->getMessage();
$data['retCode'] = $reply->getRet1Vs1()->getRetCode();
$data['userId'] = $reply->getRet1Vs1()->getUserID();
var_dump($data);



// FaceServRegister
echo "FaceServRegister :";
$request = new \Face_recog_package\FaceServRegisterRequest();
$request->setUserID(6);
$request->setMessage('test');
$request->setImage('2341234');
$requestMsg = new \Face_recog_package\FaceServRequestMsg();
$requestMsg->setType('3');
$requestMsg->setReqRegister($request);
$get = $client->FaceServRegister($requestMsg)->wait();
print_r($get);
list($reply, $status) = $get;
$data['type'] = $reply->getType();
$data['message'] = $reply->getRetRegister()->getMessage();
$data['retCode'] = $reply->getRetRegister()->getRetCode();
$data['userId'] = $reply->getRetRegister()->getUserID();
var_dump($data);

// FaceServ1VSN
echo "FaceServ1VSN :";
$request = new \Face_recog_package\FaceServ1VSNRequest();
$request->setUserID(2);
$request->setMessage('test');
$request->setImage('2341234');
$request->setGroupID(2);
$requestMsg = new \Face_recog_package\FaceServRequestMsg();
$requestMsg->setType('4');
$requestMsg->setReq1VsN($request);
$get = $client->FaceServ1VSN($requestMsg)->wait();
print_r($get);
list($reply, $status) = $get;
$data['type'] = $reply->getType();
$data['message'] = $reply->getRet1VsN()->getMessage();
$data['retCode'] = $reply->getRet1VsN()->getRetCode();
$data['userId'] = $reply->getRet1VsN()->getUserID();
$data['groupID'] = $reply->getRet1VsN()->getGroupID();
var_dump($data);


die;



