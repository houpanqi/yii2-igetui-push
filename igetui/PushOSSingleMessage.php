<?php
/**
 * Created by PhpStorm.
 * User: Houpanqi
 * Date: 2016/12/6 0006
 * Time: 20:11
 */
namespace hpq\pusher\igetui;

use hpq\pusher\protobuf\PBMessage;

class PushOSSingleMessage extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\hpq\\pusher\\protobuf\\type\\PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "\\hpq\\pusher\\igetui\\OSMessage";
        $this->values["2"] = "";
        $this->fields["3"] = "\\hpq\\pusher\\igetui\\Target";
        $this->values["3"] = "";
    }

    function seqId()
    {
        return $this->_get_value("1");
    }

    function set_seqId($value)
    {
        return $this->_set_value("1", $value);
    }

    function message()
    {
        return $this->_get_value("2");
    }

    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }

    function target()
    {
        return $this->_get_value("3");
    }

    function set_target($value)
    {
        return $this->_set_value("3", $value);
    }
}