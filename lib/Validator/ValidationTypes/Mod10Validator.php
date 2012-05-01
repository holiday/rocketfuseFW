<?php

namespace ValidationTypes;
require_once 'AbstractValidator.php';

/**
 *  Make sure to validate integer length when using this validator. Incorrect results may be returned.
 *  It is highly reccomended that this be coupled with regular expressions when used.
 */

class Mod10Validator extends AbstractValidator {
    
    public function validate() {
        
        //clean spaces around and between digits
        $val = preg_replace('/\s+/', '', trim($this->value));
        
        if(!preg_match('/^[0-9]+$/', $val)){
            return false;
        }
        
        $chars = str_split($val);

        $i = count($chars) - 2;
        while ($i >= 0) {
            $chars[$i] = $chars[$i] * 2;
            $i = $i - 2;
        }

        $charsString = implode('', $chars);
        $sum = 0;
        $chars = str_split($charsString);
        foreach ($chars as $char) {
            $sum += $char;
        }
        
        return (($sum % 10) == 0);
    }

}

?>
