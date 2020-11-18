<?php
namespace Face;

class FaceRecogPackageClient extends \Grpc\BaseStub{

    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     *
     * 方法名尽量和 (gprc 定义 Face_recog 服务)的方法一样
     * 用于请求和响应该服务
     */
    public function FaceServDetct(\Face_recog_package\FaceServDetectRequest $argument,$metadata=[],$options=[]){
        // (/FaceRecogService/FaceServDetct) 是请求服务端那个服务和方法，基本和 proto 文件定义一样
        // (\Face_recog_package\FaceServ1VS1Result) 是响应信息（那个类），基本和 proto 文件定义一样
        return $this->_simpleRequest('/FaceRecogService/FaceServDetct',
            $argument,
            ['\Face_recog_package\FaceServDetectResult', 'decode'],
            $metadata, $options);
    }

}
