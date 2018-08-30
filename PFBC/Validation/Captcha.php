<?php
namespace PFBC\Validation;

class Captcha extends \PFBC\Validation {
	protected $message = "Die reCATPCHA Eingabe ist falsch.";
	protected $privateKey;

	public function __construct($privateKey, $message = "") {
		$this->privateKey = $privateKey;
		if(!empty($message))
			$this->message = $message;
	}

	public function isValid($value) {
		require_once(__DIR__ . "/../Resources/recaptchalib.php");
		$resp = recaptcha_check_answer ($this->privateKey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
		if($resp->is_valid)
			return true;
		else	
			return false;
	}
}
