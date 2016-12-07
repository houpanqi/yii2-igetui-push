<?php
/**
 * @author Nikolai Kordulla
 */
namespace hpq\pusher\protobuf\type;
use hpq\pusher\protobuf\PBMessage;

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
