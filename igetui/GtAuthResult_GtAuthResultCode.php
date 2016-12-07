<?php
/**
 * Created by PhpStorm.
 * User: Houpanqi
 * Date: 2016/12/6 0006
 * Time: 20:01
 */
namespace hpq\pusher\igetui;

use hpq\pusher\protobuf\type\PBEnum;

class GtAuthResult_GtAuthResultCode extends PBEnum
{
    const successed = 0;
    const failed_noSign = 1;
    const failed_noAppkey = 2;
    const failed_noTimestamp = 3;
    const failed_AuthIllegal = 4;
    const redirect = 5;
}
