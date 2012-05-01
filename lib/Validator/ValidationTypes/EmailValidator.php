<?php

namespace ValidationTypes;
require_once 'AbstractValidator.php';

class EmailValidator extends AbstractValidator {

    public function validate() {
        return filter_var($this->value, FILTER_VALIDATE_EMAIL);
    }

}

?>