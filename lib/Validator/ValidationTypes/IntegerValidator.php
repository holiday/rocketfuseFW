<?php

namespace ValidationTypes;

require_once 'AbstractValidator.php';

class IntegerValidator extends AbstractValidator {

    public function validate() {
        
        return preg_match("/^[0-9]+$/", $this->value);
    }

}

?>