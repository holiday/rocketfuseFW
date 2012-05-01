<?php

/*
 * Option FormField to be used in Select FormField
 */

namespace FieldTypes;

class StringField extends AbstractFormField {
    
    public function __construct($details){
        parent::__construct($details, null);
    }
    
    /**
     *   
     */
    public function getHtml() {
       return $this->name;
    }
    
    /**
     *   
     */
    public function isEmpty() {
        return false;
    }
    

}
?>
