<?php
namespace PFBC\Validation;

class Numeric extends \PFBC\Validation {
	protected $message = "%element% muss eine Zahl sein.";

	public function isValid($value) {
		if($this->isNotApplicable($value) || is_numeric($value))
			return true;
		return false;	
	}
}
