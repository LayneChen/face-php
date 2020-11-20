<?php
namespace Rpc_package;

class HelloClient extends \Grpc\BaseStub{

    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     *
     * 方法名尽量和 (gprc 定义 Face_recog 服务)的方法一样
     * 用于请求和响应该服务
     */
    public function SayHello(\Rpc_package\HelloRequest $argument, $metadata=[], $options=[]){
        return $this->_simpleRequest('/HelloWorldService/SayHello',
            $argument,
            ['\Rpc_package\HelloReply', 'decode'],
            $metadata, $options);
    }

}
