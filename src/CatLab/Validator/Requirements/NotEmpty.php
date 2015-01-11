<?php
namespace CatLab\Validator\Requirements;

class NotEmpty
	extends Requirement {

	public function __construct ()
	{

	}

	public function validate ($value)
	{
		if (!isset ($value))
			return true;

		return !empty ($value);
	}

}