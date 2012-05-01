<?php

namespace ValidationTypes;
require_once 'AbstractValidator.php';

class BooleanValidator extends AbstractValidator {

    public function validate() {
        return filter_var($this->value, FILTER_VALIDATE_BOOLEAN);
    }

}

?>