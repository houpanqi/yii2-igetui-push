<?php

namespace hpq\pusher\igetui;

use hpq\pusher\protobuf\PBMessage;

class ReqServList extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\hpq\\pusher\\protobuf\\type\\PBString";
        $this->values["1"] = "";
        $this->fields["3"] = "\\hpq\\pusher\\protobuf\\type\\PBInt";
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

    function timestamp()
    {
        return $this->_get_value("3");
    }

    function set_timestamp($value)
    {
        return $this->_set_value("3", $value);
    }
}