<?php
namespace common\components\pusher\igetui\utils;
class LogUtils
{
    static $debug = true;

    public static function debug($log)
    {
        if (LogUtils::$debug)
            echo date('y-m-d h:i:s', time()) . ($log) . "\r\n";
    }
}