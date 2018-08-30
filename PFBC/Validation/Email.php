<?php
namespace PFBC\Validation;

class Email extends \PFBC\Validation {
	protected $message = "%element% ist keine g&uuml;ltige E-Mail-Adresse.";

	public function isValid($value) {
		if($this->isNotApplicable($value) || filter_var($value, FILTER_VALIDATE_EMAIL))
			return true;
		return false;	
	}
}
