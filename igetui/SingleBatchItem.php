<?php
/**
 * Created by PhpStorm.
 * User: Houpanqi
 * Date: 2016/12/6 0006
 * Time: 20:18
 */
namespace hpq\pusher\igetui;

use hpq\pusher\protobuf\PBMessage;

class SingleBatchItem extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\hpq\\pusher\\protobuf\\type\\PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "\\hpq\\pusher\\protobuf\\type\\PBString";
        $this->values["2"] = "";
    }

    function seqId()
    {
        return $this->_get_value("1");
    }

    function set_seqId($value)
    {
        return $this->_set_value("1", $value);
    }

    function data()
    {
        return $this->_get_value("2");
    }

    function set_data($value)
    {
        return $this->_set_value("2", $value);
    }
}