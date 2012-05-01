<?php

/*
 * Checkbox FormField
 */

namespace FieldTypes;

require_once 'AbstractFormField.php';

class Check extends AbstractFormField {
    
    public function getHtml() {
        return "<input type=\"checkbox\" name='$this->name' " . $this->toHtml($this->attributes) . "/>";
    }
    
    public function isEmpty(){
        return $this->value == null;
    }

}
?>