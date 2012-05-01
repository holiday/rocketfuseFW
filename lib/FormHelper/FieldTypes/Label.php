<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FieldTypes;

class Label extends AbstractFormField {

    private $innerFields;

    public function __construct($name, $attribute = array(), $innerFields=null) {
        parent::__construct($name, $attribute);;
        
        //This label houses a FormField
        if($innerFields != null) {
            //single inner field
            if($innerFields instanceof \FieldTypes\AbstractFormField) {
                $this->innerFields[] = $innerFields;
            }else{
                //multiple innerfields
                $this->innerFields = $innerFields;
            }
        }
    }

    /**
     *  Return the HTML representation of this FormField
     */
    public function getHtml() {
        $base = "<label " . $this->toHtml($this->attributes) . ">";
        
        foreach($this->innerFields as $innerField) {
            $base .= "\n" . $innerField->getHtml();
        }
        return $base .= "</label>";
    }
    
    public function getInnerField($id=null) {
        if(is_int($id) && $id >= 0) {
            if(isset($this->innerFields[$id])) {
                return $this->innerFields[$id];
            }
        }
        return false;
    }
    
    public function getInnerFields() {
        return $this->innerFields;
    }

    /**
     *  Return false (redundant method for this field)
     */
    public function isEmpty() {
        return false;
    }

}

?>
