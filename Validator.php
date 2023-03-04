<?php 

class Validator {
    public static function checkEmpty($key, $value) {
        global $errors;
        if(empty($value)) {
            $errors[] = ucfirst($key). " cannot be empty.";
        }
    }
}