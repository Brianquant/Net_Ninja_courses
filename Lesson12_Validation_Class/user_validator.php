<?php 


// create a user validator class to handle validation
// constructor which takes in POST data from form
// check required  "fields to check" are present in the data
// create methods to validate individual fields
// -- a method to validate a username
// -- a method to validate an email


// Create a UserValidator Class
class UserValidator {
// Properties Section
// Assign a data prop private
private $data;
// Aissign a error prop to an empty array
private $error = [];
// Assign a static fields prop to the input fields inside an array
private static $fields = ['username','email'];


// create construct function with post data (public)
    public function __construct($postData) 
    {
        $this->data = $postData;
    }

// create validate Form function
    private function formValidator() {
        foreach (self::$fields as $field) { //the self keyword access the static property
            if(!array_key_exists($field, $this->data)) {
                trigger_error("$field is not present in data");
                return;
            }
        }

        $this->usernameValidator();
        $this->emailValidator();

        return $this->errors;
    }
// create validate Username function
    private function usernameValidator() 
    {
        $val = trim($this->data[data['username']]);

        if(empty($val)) {
            $this->addError('username', 'username cannot be emtpy'); // The arguments are a key and value pair
        } else {
            if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)) { //preg_match takes 2 params. First (Regex) param checks for lowercase, uppercase, numbers and 6-12 Characters
                $this->addError('username', 'username must be 6-12 characters and alpahnumeric!');
            }
        }
    }
// create validate Email function
    private function emailValidator()
    {
        $val = trim($this->data[data['email']]);

        if(empty($val)) {
            $this->addError('email', 'Email cannot be emtpy'); // The arguments are a key and value pair
        } else {
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)) { 
                $this->addError('email', 'email must be a valid email');   
    }
// create validate addError function
    private function addError($key, $val) 
    {
        $this->errors[$key] = $val;
    }
}










 


?>