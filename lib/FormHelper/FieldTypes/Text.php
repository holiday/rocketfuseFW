<?php

/*
 * Text FormField
 */

namespace FieldTypes;

require_once 'AbstractFormField.php';

class Text extends AbstractFormField {
    
    public function getHtml() {
        $base = "<input type=\"text\" name=\"$this->name\" ";
        
        foreach($this->attributes as $attribute => $value) {
            $base .= "$attribute=\"$value\" ";
        }
        
        return $base . "/>";
    }
    
    public function isEmpty() {
        return empty($this->value);
    }
    
    

}
?>
