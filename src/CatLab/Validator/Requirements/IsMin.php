<?php
namespace CatLab\Validator\Requirements;

class IsMin
	extends Requirement {

	private $value;

	public function __construct ($value)
	{
		$this->value = $value;
	}

	public function validate ($value)
	{
		if (!isset ($value))
			return true;

		return $value >= $this->value;
	}

}