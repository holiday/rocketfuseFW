<?php

namespace ValidationTypes;
require_once 'AbstractValidator.php';

class MulticheckValidator extends AbstractValidator {
    

    /**
    *   Return True if the value is not null, false otherwise
    */
    public function validate() {
        
        isset($this->options['min']) ? $min = $this->options['min'] : $min = 1;
        isset($this->options['max']) ? $max = $this->options['max'] : $max = INF;
        $val = $this->value;
        
        if($val == null && $min == 0) {
            return true;
        }
        
        if($val == null && $min > 0) {
            return false;
        }
        
        if($val != null && count($val) >= $min && count($val) <= $max) {
            return true;
        }else {
            return false;
        }
    }

    
}

?>