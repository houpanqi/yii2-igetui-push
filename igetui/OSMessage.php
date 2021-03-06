<?php
/**
 * Created by PhpStorm.
 * User: Houpanqi
 * Date: 2016/12/6 0006
 * Time: 20:10
 */
namespace hpq\pusher\igetui;

use hpq\pusher\protobuf\PBMessage;

class OSMessage extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = null)
    {
        parent::__construct($reader);
        $this->fields["2"] = "\\hpq\\pusher\\protobuf\\type\\PBBool";
        $this->values["2"] = "";
        $this->fields["3"] = "\\hpq\\pusher\\protobuf\\type\\PBInt";
        $this->values["3"] = "";
        $this->fields["4"] = "\\hpq\\pusher\\igetui\\Transparent";
        $this->values["4"] = "";
        $this->fields["5"] = "\\hpq\\pusher\\protobuf\\type\\PBString";
        $this->values["5"] = "";
        $this->fields["6"] = "\\hpq\\pusher\\protobuf\\type\\PBInt";
        $this->values["6"] = "";
        $this->fields["7"] = "\\hpq\\pusher\\protobuf\\type\\PBInt";
        $this->values["7"] = "";
        $this->fields["8"] = "\\hpq\\pusher\\protobuf\\type\\PBInt";
        $this->values["8"] = "";
    }

    function isOffline()
    {
        return $this->_get_value("2");
    }

    function set_isOffline($value)
    {
        return $this->_set_value("2", $value);
    }

    function offlineExpireTime()
    {
        return $this->_get_value("3");
    }

    function set_offlineExpireTime($value)
    {
        return $this->_set_value("3", $value);
    }

    function transparent()
    {
        return $this->_get_value("4");
    }

    function set_transparent($value)
    {
        return $this->_set_value("4", $value);
    }

    function extraData()
    {
        return $this->_get_value("5");
    }

    function set_extraData($value)
    {
        return $this->_set_value("5", $value);
    }

    function msgType()
    {
        return $this->_get_value("6");
    }

    function set_msgType($value)
    {
        return $this->_set_value("6", $value);
    }

    function msgTraceFlag()
    {
        return $this->_get_value("7");
    }

    function set_msgTraceFlag($value)
    {
        return $this->_set_value("7", $value);
    }

    function priority()
    {
        return $this->_get_value("8");
    }

    function set_priority($value)
    {
        return $this->_set_value("8", $value);
    }
}