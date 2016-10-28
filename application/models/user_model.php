<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_model
 *
 * @author Olaleye
 */

class User_model extends CRUD_Model {     
    protected $_table = 'user';
    protected $_primary_key = 'user_id';

//------------------------------------------------------------------------------
    public function get($user_id = NULL) {
//        if ($user_id === NULL) {
//            echo TABLE_NAME;
//            echo self::GET_ALL_USERS;
//            
//        } else {
//            
//        }
    }
//------------------------------------------------------------------------------
    public function insert() {
        
    }
//------------------------------------------------------------------------------
    public function update() {
        
    }
//------------------------------------------------------------------------------
    public function delete() {
        
    }
//------------------------------------------------------------------------------
    
    
}
