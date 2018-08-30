<?php
namespace PFBC\Validation;

class AlphaNumeric extends RegExp {
	protected $message = "%element% muss alphanumerisch sein.";

	public function __construct($message = "") {
		parent::__construct("/^[a-zA-Z0-9_-]+$/", $message);
	}
}
