<?php

namespace ValidationTypes;
require_once 'AbstractValidator.php';

class SinglecheckValidator extends AbstractValidator {
    

    /**
    *   Return True if the value is not null, false otherwise
    */
    public function validate() {
        return $this->value != null;
    }

    
}

?>
