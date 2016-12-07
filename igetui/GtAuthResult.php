<?php
/**
 * Created by PhpStorm.
 * User: Houpanqi
 * Date: 2016/12/6 0006
 * Time: 20:01
 */
namespace hpq\pusher\igetui;

use hpq\pusher\protobuf\PBMessage;

class GtAuthResult extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\hpq\\pusher\\protobuf\\type\\PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "\\hpq\\pusher\\protobuf\\type\\PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "\\hpq\\pusher\\protobuf\\type\\PBString";
        $this->values["3"] = "";
        $this->fields["4"] = "\\hpq\\pusher\\protobuf\\type\\PBString";
        $this->values["4"] = "";
    }

    function code()
    {
        return $this->_get_value("1");
    }

    function set_code($value)
    {
        return $this->_set_value("1", $value);
    }

    function redirectAddress()
    {
        return $this->_get_value("2");
    }

    function set_redirectAddress($value)
    {
        return $this->_set_value("2", $value);
    }

    function seqId()
    {
        return $this->_get_value("3");
    }

    function set_seqId($value)
    {
        return $this->_set_value("3", $value);
    }

    function info()
    {
        return $this->_get_value("4");
    }

    function set_info($value)
    {
        return $this->_set_value("4", $value);
    }
}
