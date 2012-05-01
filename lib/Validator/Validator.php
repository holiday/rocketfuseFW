<?php

namespace Validator;

require_once 'Bootstrapper.php';
require_once 'Rule.php';

class Validator {

    //stores the rules and options
    private $rules;
    //stores the data as key:value pairs
    private $data;
    //logs errors for each field
    private $errors = array();

    /**
     * Initializes a new Validator with rules and the data to perform the validation on
     * @param type $rules Array of fieldnames to rules
     * @param type $data Array of key value pairs of data
     */
    public function __construct($rules, $data) {
        $this->rules = $rules;
        $this->data = $data;

        // Initialize the bootstrapper
        $bootstrap = new \Validator\Bootstrapper(dirname(__FILE__));
        $bootstrap->register();
    }

    /**
     *  Getter for the errors
     * @return type Array
     */
    public function getErrors() {
        return $this->errors;
    }

    /**
     *  Return true if there are no errors
     * @return type Boolean
     */
    public function isValid() {
        return empty($this->errors);
    }

    /**
     *  Parses through each rule
     *  @return type void
     */
    public function validate($rules = null) {

        //Rules dictating which fields to validate and strategy to use
        if ($rules == null) {
            $rules = $this->rules;
        }

        //Loop over each field:rule pairs
        foreach ($rules as $fieldName => $rule) {
            //single rule detected
            if (!is_array($rule)) {
                //validate the field with specifications in array $rule
                $this->_validate($fieldName, $rule);
            } else {
                //multiple rules detected, recurse
                foreach ($rule as $singleRule) {
                    $multiRule[$fieldName] = $singleRule;
                    $this->validate($multiRule);
                }
            }
        }
    }

    /**
     * Helper method for validate(). Validates an individual field by loading the correct AbstractValidator 
     * and passing in the necessart options.
     * @param type $fieldName String
     * @param type $rule Array
     * @return type void
     */
    private function _validate($fieldName, $rule) {
        //single rule
        $validator = '\\ValidationTypes\\' . ucfirst($rule->getValidator()) . 'Validator';
        $val = new $validator($this->getData($fieldName), $rule->getOptions());
        
        
        //Validate and log any errors
        if (!$val->validate() && !isset($this->errors[$fieldName])) {
            $this->errors[$fieldName] = $rule->getMessage();
        }

    }
    
    /**
     *  Return the data if found, null otherwise
     * @param type $fieldName
     * @return null 
     */
    private function getData($fieldName) {
        if (!isset($this->data[$fieldName])) {
            return null;
        } else {
            $data = $this->data[$fieldName];
            if(is_string($data)) {
                $data = trim($this->data[$fieldName]);
            }
            return $data;
        }
    }

}

?>