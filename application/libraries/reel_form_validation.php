<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reel_form_validation
 *
 * @author Olaleye
 */
class REEL_Form_validation extends CI_Form_validation{
    
    public function __construct($config = array()) {
        parent::__construct($config);
    }
    
    public function error_array() {
        if(count($this->_error_array > 0)){
            return $this->_error_array;
        }
        
    }
}
