<?php
namespace common\components\pusher\igetui;

use common\components\pusher\protobuf\PBMessage;

class GtAuth extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "\\common\\components\\pusher\\protobuf\\type\\PBInt";
        $this->values["3"] = "";
        $this->fields["4"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["4"] = "";
    }

    function sign()
    {
        return $this->_get_value("1");
    }

    function set_sign($value)
    {
        return $this->_set_value("1", $value);
    }

    function appkey()
    {
        return $this->_get_value("2");
    }

    function set_appkey($value)
    {
        return $this->_set_value("2", $value);
    }

    function timestamp()
    {
        return $this->_get_value("3");
    }

    function set_timestamp($value)
    {
        return $this->_set_value("3", $value);
    }

    function seqId()
    {
        return $this->_get_value("4");
    }

    function set_seqId($value)
    {
        return $this->_set_value("4", $value);
    }
}
