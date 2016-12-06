<?php
/**
 * @author Nikolai Kordulla
 */
namespace common\components\pusher\protobuf\type;
use common\components\pusher\protobuf\PBMessage;

class PBScalar extends PBMessage
{
	/**
	 * Set scalar value
	 */
	public function set_value($value)
	{	
		$this->value = $value;	
	}

	/**
	 * Get the scalar value
	 */
	public function get_value()
	{
		return $this->value;
	}
}
