<?php
namespace PFBC\Validation;

class Url extends \PFBC\Validation {
	protected $message = "%element% ist kein g&uuml;ltiger Link (z.B. http://www.google.com).";

	public function isValid($value) {
		if($this->isNotApplicable($value) || filter_var($value, FILTER_VALIDATE_URL))
			return true;
		return false;	
	}
}
