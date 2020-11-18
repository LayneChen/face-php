<?php
require __DIR__ . '/vendor/autoload.php';

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

print_r('welcome!');
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
/**
 *&#47;////////////////////////////////////////////////////////////  请求数据定义详情  ///////////////////////////////////////////////////////////////////////////
 * 检测请求
 *
 * Generated from protobuf message <code>face_recog_package.FaceServDetectRequest</code>
 */
class FaceServDetectRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string message = 1;</code>
     */
    private $message = '';
    /**
     * Generated from protobuf field <code>string image = 2;</code>
     */
    private $image = '';
    /**
     *  用户ID
     *
     * Generated from protobuf field <code>string userID = 3;</code>
     */
    private $userID = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *     @type string $image
     *     @type string $userID
     *            用户ID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\FaceRecog1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string image = 2;</code>
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Generated from protobuf field <code>string image = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->image = $var;

        return $this;
    }

    /**
     *  用户ID
     *
     * Generated from protobuf field <code>string userID = 3;</code>
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     *  用户ID
     *
     * Generated from protobuf field <code>string userID = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUserID($var)
    {
        GPBUtil::checkString($var, True);
        $this->userID = $var;

        return $this;
    }

}

$client = new FaceRecogPackageClient('172.17.0.1:8787', [
    'credentials' => \Grpc\ChannelCredentials::createInsecure()
]);


$request = new FaceServDetectRequest();
$request->setImage('s');
$request->setUserID('1');
$request->setMessage('test');
$get = $client->FaceServDetct($request)->wait();

list($reply, $status) = $get;
$data = $reply->getMessage();
var_dump($data);die;



