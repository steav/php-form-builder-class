<?php
namespace PFBC\Validation;

class MaxLength extends \PFBC\Validation {
	protected $message;
	protected $limit;

	public function __construct($limit, $message = "") {
		$this->limit = $limit;
		if(empty($message))
			$message = "%element% darf maximal " . $limit . " Zeichen lang sein.";
		parent::__construct($message);
	}

	public function isValid($value) {
		if($this->isNotApplicable($value) || strlen($value) <= $this->limit)
			return true;
		return false;	
	}
}
