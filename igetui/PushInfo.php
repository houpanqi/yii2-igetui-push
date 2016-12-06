<?php
/**
 * Created by PhpStorm.
 * User: Houpanqi
 * Date: 2016/12/6 0006
 * Time: 20:09
 */
namespace common\components\pusher\igetui;

use common\components\pusher\protobuf\PBMessage;

class PushInfo extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["3"] = "";
        $this->fields["4"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["4"] = "";
        $this->fields["5"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["5"] = "";
        $this->fields["6"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["6"] = "";
        $this->fields["7"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["7"] = "";
        $this->fields["8"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["8"] = "";
        $this->fields["9"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["9"] = "";
        $this->fields["10"] = "\\common\\components\\pusher\\protobuf\\type\\PBInt";
        $this->values["10"] = "";
        $this->fields["11"] = "\\common\\components\\pusher\\protobuf\\type\\PBBool";
        $this->values["11"] = "";
        $this->fields["12"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["12"] = "";
        $this->fields["13"] = "\\common\\components\\pusher\\protobuf\\type\\PBBool";
        $this->values["13"] = "";
        $this->fields["14"] = "\\common\\components\\pusher\\protobuf\\type\\PBString";
        $this->values["14"] = "";
    }

    function message()
    {
        return $this->_get_value("1");
    }

    function set_message($value)
    {
        return $this->_set_value("1", $value);
    }

    function actionKey()
    {
        return $this->_get_value("2");
    }

    function set_actionKey($value)
    {
        return $this->_set_value("2", $value);
    }

    function sound()
    {
        return $this->_get_value("3");
    }

    function set_sound($value)
    {
        return $this->_set_value("3", $value);
    }

    function badge()
    {
        return $this->_get_value("4");
    }

    function set_badge($value)
    {
        return $this->_set_value("4", $value);
    }

    function payload()
    {
        return $this->_get_value("5");
    }

    function set_payload($value)
    {
        return $this->_set_value("5", $value);
    }

    function locKey()
    {
        return $this->_get_value("6");
    }

    function set_locKey($value)
    {
        return $this->_set_value("6", $value);
    }

    function locArgs()
    {
        return $this->_get_value("7");
    }

    function set_locArgs($value)
    {
        return $this->_set_value("7", $value);
    }

    function set_invalidMPN($value)
    {
        return $this->_set_value("13", $value);
    }
    function set_apnJson($value)
    {
        return $this->_set_value("12", $value);
    }
    function invalidAPN()
    {
        return $this->_get_value("11");
    }

    function set_invalidAPN($value)
    {
        return $this->_set_value("11", $value);
    }


    function apnJson()
    {
        return $this->_get_value("12");
    }

    function actionLocKey()
    {
        return $this->_get_value("8");
    }

    function set_actionLocKey($value)
    {
        return $this->_set_value("8", $value);
    }

    function launchImage()
    {
        return $this->_get_value("9");
    }

    function set_launchImage($value)
    {
        return $this->_set_value("9", $value);
    }

    function contentAvailable()
    {
        return $this->_get_value("10");
    }

    function set_contentAvailable($value)
    {
        return $this->_set_value("10", $value);
    }
}
