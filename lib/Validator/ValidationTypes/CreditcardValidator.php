<?php

namespace ValidationTypes;
require_once 'AbstractValidator.php';

class CreditcardValidator extends AbstractValidator {

    /**
     * Return true if String is a valid creditcard number, false otherwise.
     * @param $val String creditcard number
     * @param $type String credit card type i.e (MASTERCARD, VISA, AMEX, DinersClub/CarteBlanche, Discover, enRoute, jcb)
     */
    public function validate() {

        //clean spaces around and between digits
        $val = preg_replace('/\s+/', '', trim($this->value));
        
        //match lengths and prefixes
        $regexCards = array(
            'mastercard' => '/^5[1-5]{1}[0-9]{14}$/',
            'visa' => '/^4\d{12}(\d{3})?$/',
            'amex' => '/^3(4|7)\d{13}$/',
            'dinersclub' => '/^((30[0-5]{1}\d{11})|(3(6|8)\d{12}))$/',
            'discover' => '/^6011(\d){12}$/',
            'enroute' => '/^2((014(\d){11})|(149(\d){11}))$/',
            'jcb' => '/^(3(\d{15}))|(2131(\d){11})|(1800(\d){11})$/'
        );
        
        //get credit card type(s)
        $type = $this->options['type'];
        
        if(!is_array($type)){
                //single credit-card type
                return $this->isValid($val, $type, $regexCards);
        }else{
            //check multiple credit-card types
            foreach($type as $ccType) {
                if($this->isValid($val, $ccType, $regexCards)) {
                    return true;
                }
            }
        }
        //failed to validate the card
        return false;
    }

    /**
     * Luhn's Algorithm (Mod 10 Checker) for security cards that use check digits
     * @param $val String of number to check
     */
    private function mod10check($val) {
        
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
    
    private function isValid($val, $type, $regexCards) {
            if (preg_match($regexCards[strtolower(trim($type))], $val) && $this->mod10check($val)) {
                return true;
            }
            return false;
    }

}

?>