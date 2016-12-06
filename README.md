### 组件介绍
    基于国内的“个推”封装而成，方便Yii2框架使用。
    
### 安装
    composer require houpanqi/yii2-igetui-push
    
### 配置
    在main.php中配置

    'class' => 'hpq\pusher\Push',
    'appId' => '', //你的APPID
    'appKey' => '', //你的APPKEY
    'masterSecret' => '', //你的masterSecret
    'host' => 'http://sdk.open.api.igexin.com/apiex.htm',
程序中使用
----------    
    $pusher = Yii::$app->push;
    $config = [
        'title' => '测试',
        'content' => '测试',
        'logo'=>'test',
    //  'showStartAt'=>date("Y-m-d H:i:s"),
    //   'showEndAt'=>date("")
    //      其他参数请参考类中的模板设置
    ];
 
    $clients = '2d75b427a6341f4b837a3d95e398ae75';
    $res = $pusher->setClient($clients)->useNotifyPopLoadTemplate($config)->pushOne(); //个推
    
    
### 开发者信息

    侯攀奇
    
    组件地址https://github.com/houpanqi/getui.git# yii2-igetui-push
