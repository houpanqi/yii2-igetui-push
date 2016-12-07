<?php
namespace hpq\pusher\igetui;

class IGtAppMessage extends IGtMessage{
	
	//array('','',..)
	var $appIdList;
	
	//array('','',..)
	var $phoneTypeList;
	
	//array('','',..)
	var $provinceList;

    var $tagList;
	var $conditions;
    var $speed=0;
	function __construct(){
		parent::__construct();
	}

	function get_appIdList() {
		return $this->appIdList;
	}

	function  set_appIdList($appIdList) {
		$this->appIdList = $appIdList;
	}

    /**
     * Function:get_phoneTypeList
     * @return mixed
     */
	function get_phoneTypeList() {
		return $this->phoneTypeList;
	}

    /**
     * Function:set_phoneTypeList
     * @param $phoneTypeList
     */
	function  set_phoneTypeList($phoneTypeList) {
		$this->phoneTypeList = $phoneTypeList;
	}

	/**
	 * @deprecated deprecated since version 4.0.0.3
	 */
	function  get_provinceList() {
		return $this->provinceList;
	}

    /**
     * Function:set_provinceList
     * @param $provinceList
     */
	function  set_provinceList($provinceList) {
		$this->provinceList = $provinceList;
	}

	/**
	 * @deprecated deprecated since version 4.0.0.3
	 */
    function get_tagList() {
        return $this->tagList;
    }

    /**
     * Function:set_tagList
     * @param $tagList
     */
    function set_tagList($tagList) {
        $this->tagList = $tagList;
    }

	public function get_conditions()
	{
		return $this->conditions;
	}

	public function set_conditions($conditions)
	{
		$this->conditions = $conditions;
	}

	function get_speed()
	{
		return $this->speed;
	}
	function set_speed($speed)
	{
		$this->speed=$speed;
	}
}