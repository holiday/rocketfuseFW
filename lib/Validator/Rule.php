<?php

/*
 * Rule for validating a piece of data
 */
namespace Validator;

class Rule {

    private $validator;
    private $message;
    private $required;
    private $options;
    
    /**
     *  Initialize a new Rule for the AbstractValidator to parse
     * @param type $validator String
     * @param type $message String
     * @param type $required Boolean
     * @param type $options Array
     */
    public function __construct($validator, $message='', $options=array()) {
        $this->validator = $validator;
        $this->message = $message;
        $this->options = $options;
    }
    
    /**
     * Adds an option to this rule as a key value pair. Options are passed to the AbstractValidator as needed.
     * @param type $key String
     * @param type $val Object
     */
    public function addOption($key, $val) {
        $this->options[$key] = $val;
    }
    
    /**
     *  Return an option or false if option is not found.
     * @param type $key
     * @return boolean 
     */
    public function getOption($key) {
        if (isset($this->options[$key])) {
            return $this->options[$key];
        }
        return false;
    }
    
    /**
     *  Return the options for this Rule
     * @return type Array
     */
    public function getOptions() {
        return $this->options;
    }
    
    /**
     *  Return the Validator name of this Rule
     * @return type String
     */
    public function getValidator() {
        return trim($this->validator);
    }
    
    /**
     *  Return the message for this Rule
     * @return type String
     */
    public function getMessage() {
        return $this->message;
    }
    
    /**
     * Return true if this Rule is required, false otherwise
     * @return type 
     */
    public function isRequired() {
        if(isset($this->options['required'])) {
            return filter_var($this->options['required'], FILTER_VALIDATE_BOOLEAN);
        }else{
            return false;
        }
    }
}


?>
