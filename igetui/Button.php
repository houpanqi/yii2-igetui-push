<?php
/**
 * Created by PhpStorm.
 * User: Houpanqi
 * Date: 2016/12/6 0006
 * Time: 20:07
 */
namespace common\components\pusher\igetui;

use common\components\pusher\protobuf\PBMessage;

class Button extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "\\common\\components\\pusher\\protobuf\\type\\PBInt";
        $this->values["2"] = "";
    }

    function text()
    {
        return $this->_get_value("1");
    }

    function set_text($value)
    {
        return $this->_set_value("1", $value);
    }

    function next()
    {
        return $this->_get_value("2");
    }

    function set_next($value)
    {
        return $this->_set_value("2", $value);
    }
}