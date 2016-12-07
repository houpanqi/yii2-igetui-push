<?php
namespace hpq\pusher\protobuf\reader;
use hpq\pusher\protobuf\encoding\Base128varint;

/**
 * Abstract class for an input reader
 */
abstract class PBInputReader
{
	protected $base128;
	protected $pointer = 0;
	protected $string = '';


	public function __construct()
	{
		$this->base128 = new Base128varint(1);
	}

	/**
	 * Gets the acutal position of the point
	 * @return int the pointer
	 */
	public function get_pointer()
	{
		return $this->pointer;
	}

	/**
	 * Add add to the pointer
	 * @param int $add - int to add to the pointer
	 */
	public function add_pointer($add)
	{
		$this->pointer += $add;
	}

    /**
     * Function:get_message_from
     * @param $from
     * @return string
     */
	public function get_message_from($from)
	{
		return substr($this->string, $from, $this->pointer - $from);
	}

    /**
     * Function:next
     * @return mixed
     */
	public abstract function next();	
}
