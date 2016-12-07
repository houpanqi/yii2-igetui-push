<?php
/**
 * Created by PhpStorm.
 * User: Houpanqi
 * Date: 2016/12/6 0006
 * Time: 20:03
 */

namespace hpq\pusher\igetui;

use hpq\pusher\protobuf\type\PBEnum;

class ReqServListResult_ReqServHostResultCode extends PBEnum
{
    const successed = 0;
    const failed = 1;
    const busy = 2;
}
