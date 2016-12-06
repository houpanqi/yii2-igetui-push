<?php
/**
 * Created by PhpStorm.
 * User: Houpanqi
 * Date: 2016/12/6 0006
 * Time: 20:11
 */
namespace common\components\pusher\igetui;

use common\components\pusher\protobuf\PBMessage;

class Target extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["2"] = "";
    }

    function appId()
    {
        return $this->_get_value("1");
    }

    function set_appId($value)
    {
        return $this->_set_value("1", $value);
    }

    function clientId()
    {
        return $this->_get_value("2");
    }

    function set_clientId($value)
    {
        return $this->_set_value("2", $value);
    }
}