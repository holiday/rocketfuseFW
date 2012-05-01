<?php

namespace ValidationTypes;

abstract class AbstractValidator {

    //the value to be validated
    protected $value;
    //Stores options that the validate() method requires to perform the validation
    protected $options;

    /**
     * Initialize a new AbstractValidator
     * @param $value String to be validated
     * @param $errorMsg Error message to be logged should validation fail
     */
    public function __construct($value, $options = null) {
        $this->value = $value;
        $this->options = $options;
    }

    /**
     * To be implemented for each Validator
     */
    abstract public function validate();

}

?>