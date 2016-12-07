<?php
/**
 * Created by PhpStorm.
 * User: Houpanqi
 * Date: 2016/12/6 0006
 * Time: 20:15
 */
namespace hpq\pusher\igetui;

use hpq\pusher\protobuf\type\PBEnum;

class ServerNotify_NotifyType extends PBEnum
{
    const normal = 0;
    const serverListChanged = 1;
    const exception = 2;
}