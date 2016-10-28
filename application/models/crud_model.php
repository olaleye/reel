<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of crud_model
 *
 * @author Olaleye
 */
class CRUD_Model extends CI_Model {

    protected $_table = NULL;
    protected $_primary_key = NULL;
    protected $_query = NULL;

//------------------------------------------------------------------------------
    public function __construct() {
        parent::__construct();
    }

//------------------------------------------------------------------------------
    /**
     * @usage
     *  All:    $this->user_model->get();
     *  Single: $this->user_model->get(1);
     *  Custom: $this->user_model->get(array('LIMIT' => 'param', 'OFFSET' => 'param'));
     */
    public function get($args = NULL, $order_by = NULL) {
        if ($args == NULL) {
            $this->_query = 'SELECT * FROM ' . $this->_table . ';';
            $query = $this->db->query($this->_query);
            return $query->result_array();
        }

        if (is_numeric($args)) {
            $this->_query = 'SELECT * FROM ' . $this->_table . '
                    WHERE ' . $this->_primary_key . '=?;';
            $query = $this->db->query($this->_query, array($args));
        }

        if (is_array($args)) {
            $this->_query = 'SELECT * FROM ' . $this->_table . ' LIMIT ? OFFSET ?;';
            $query = $this->db->query($this->_query, array($args['LIMIT'], intval($args['OFFSET'])) );
            return $query->result_array();
        }
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

    public function getCount() {
        return $this->db->count_all($this->_table);
    }

}
