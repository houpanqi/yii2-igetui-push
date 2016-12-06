<?php

namespace hpq\pusher;

use yii\base\Component;

/**
 * Class Push
 * @property string $appKey
 * @property string $appId
 * @property string $masterSecret
 * @property string $host
 * @property object $template
 * @property string $clientId
 * @package common\components\pusher
 */
class Push extends Component
{
    /**
     * @var string 个推后台应用的AppKey
     */
    public $appKey = '';
    /**
     * @var string 个推后台应用的AppID
     */
    public $appId = '';
    /**
     * @var string 个推后台应用的MasterSecret
     */
    public $masterSecret = '';
    /**
     * @var string HOST地址
     */
    public $host = '';
    /**
     * @var object 模板
     * 1.TransmissionTemplate:透传功能模板
     * 2.LinkTemplate:通知打开链接功能模板
     * 3.NotificationTemplate：通知透传功能模板
     * 4.NotifyPopLoadTemplate：通知弹框下载功能模板
     */
    public $template;

    /**
     * @var string 客户端ID
     */
    public $clientId;


    public function setClient($client)
    {
        if (is_array($client)) {

        } else {
            $this->clientId = $client;
        }
        return $this;
    }

    /**
     * Function:useTransmissionTemplate 使用弹框下载模板
     * @param array $config 模板主题内容配置数组
     * ```
     *  $config  = [
     *      'title','content','logo','popTitle','popContent','loadImage','loadTitle','downloadUrl','showStartAt','showEndAt'
     * ]
     * ```
     * @return $this
     */
    public function useNotifyPopLoadTemplate($config = [])
    {

        $this->template = new \IGtNotyPopLoadTemplate();
        $this->template->set_appId($this->appId); //应用appid
        $this->template->set_appkey($this->appKey); //应用appkey //通知栏
        $this->template->set_notyTitle($config['title']); //通知栏标题
        $this->template->set_notyContent($config['content']); //通知栏内容
        $this->template->set_notyIcon($config['logo']); //通知栏logo
        $this->template->set_isBelled(true); //是否响铃
        $this->template->set_isVibrationed(true); //是否震动
        $this->template->set_isCleared(true); //通知栏是否可清除
//        //弹框
//        $this->template->set_popTitle($config['popTitle']); //弹框标题
//        $this->template->set_popContent($config['popContent']); //弹框内容
//        $this->template->set_popImage(""); //弹框图片
//        $this->template->set_popButton1("下载"); //左键
//        $this->template->set_popButton2("取消"); //右键
//        //下载
//        $this->template->set_loadIcon($config['loadImage']); //载入图片
//        $this->template->set_loadTitle($config['loadTitle']); //载入标题
//        $this->template->set_loadUrl($config['downloadUrl']);
//        $this->template->set_isAutoInstall(false); //自动安装
//        $this->template->set_isActived(true);
        //设置通知定时展示时间，结束时间与开始时间相差需大于6分钟，消息推送后， //客户端将在指定时间差内展示消息（误差6分钟）
        // $this->template->set_duration($config['showStartAt'], $config['showEndAt']);
        return $this;

    }

    /**
     * Function:useTransmissionTemplate 使用透传模板(可自定义)
     * @param array $config
     * @return $this
     */
    public function useTransmissionTemplate($config = [])
    {
        $this->template = new \IGtTransmissionTemplate();
        $this->template->set_appId($this->appId);//应用appid
        $this->template->set_appkey($this->appKey);//应用appkey
        $this->template->set_transmissionType(1);//透传消息类型
        $this->template->set_transmissionContent($config['content']);//透传内容
        //$this->template->set_duration($config['showStartAt'], $config['showEndAt']);//设置ANDROID客户端在此时间区间内展示消息

        // APN高级推送
        $apn = new \IGtAPNPayload();
        $alertMsg = new \DictionaryAlertMsg();
        $alertMsg->body = "body";
        $alertMsg->actionLocKey = "ActionLockey";
        $alertMsg->locKey = "LocKey";
        $alertMsg->locArgs = array("locargs");
        $alertMsg->launchImage = "launchimage";
        // IOS8.2 支持
        $alertMsg->title = $config['title']; //通知标题
        $alertMsg->titleLocKey = "TitleLocKey";
        $alertMsg->titleLocArgs = array("TitleLocArg");
        $apn->alertMsg = $alertMsg;
        $apn->badge = 1;
        $apn->sound = "";
        $apn->add_customMsg("payload", "阿波罗度上市"); //
        $apn->contentAvailable = 1;
        $apn->category = "ACTIONABLE";
        $this->template->set_apnInfo($apn);

        return $this;
    }

    /**
     * Function:pushOne 推送给指定用户
     * @return mixed|null
     */
    public function pushOne()
    {
        $igt = new \IGeTui($this->host, $this->appKey, $this->masterSecret);

        //定义"SingleMessage"
        $message = new \IGtSingleMessage();
        $message->set_isOffline(true);//是否离线
        $message->set_offlineExpireTime(3600 * 12 * 1000);//离线时间
        $message->set_data($this->template);//设置推送消息类型
        $target = new \IGtTarget();
        $target->set_appId($this->appId);
        $target->set_clientId($this->clientId);

        try {
            $response = $igt->pushMessageToSingle($message, $target);

        } catch (\RequestException $e) {
            $requestId = $e->getRequestId(); //失败时重发
            $response = $igt->pushMessageToSingle($message, $target, $requestId);
        }

        return $response;
    }

    /**
     * Function:pushAll 推送给所有用户
     * @return mixed|null
     */
    public function pushAll()
    {
        $igt = new \IGeTui($this->host, $this->appKey, $this->masterSecret);
        //基于应用消息体
        $message = new \IGtAppMessage();
        $message->set_isOffline(true); //离线时间单位为毫秒，例，两个小时离线为3600*1000*2
        $message->set_offlineExpireTime(3600 * 12 * 1000);
        $message->set_data($this->template);
        $message->set_PushNetWorkType(0);//设置是否根据WIFI推送消息，1为wifi推送，0为不限制推送
        $message->set_speed(100);
        $message->set_appIdList(array($this->appId));
        $message->set_phoneTypeList(array('ANDROID', 'IOS'));
        //$message->set_provinceList(array('浙江', '上海', '北京'));
        //$message->set_tagList(array('开心'));
        $response = $igt->pushMessageToApp($message);

        return $response;

    }
}