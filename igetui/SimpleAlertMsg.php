<?php

namespace common\components\pusher\igetui;
/**
 * Class SimpleAlertMsg
 */
class SimpleAlertMsg implements ApnMsg
{
    var $alertMsg;

    public function get_alertMsg()
    {
        return $this->alertMsg;
    }
}