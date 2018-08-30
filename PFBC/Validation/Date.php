<?php
namespace PFBC\Validation;

class Date extends \PFBC\Validation {
    protected $message = "%element% ist kein g&uuml;ltiges Datum.";

    public function isValid($value) {
        try {
            $date = new \DateTime($value);
            return true;
        } catch(\Exception $e) {
            return false;
        }
    }
}
