<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author Olaleye
 */
class User extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }

    /**
     * Array that holds the user validation errors
     */
    private $registerUserValidationError = array(
        'error',
        'firstName',
        'lastName',
        'email',
        'password',
        'confirmPassword'
    );

//------------------------------------------------------------------------------
    /**
     * This method sets the validation rules for the register user form
     * 
     * @return boolean
     */
    private function set_register_user_validation_rules() {
        $this->form_validation->set_rules('firstName', 'First Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('lastName', 'Last Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');

        return $this->form_validation->run();
    }

//------------------------------------------------------------------------------
    public function register() {

        if ($this->set_register_user_validation_rules() == FALSE) {
            $this->registerUserValidationError['error'] = $this->form_validation->error_array();
            $this->registerUserValidationError['firstName'] = $this->form_validation->set_value('firstName');
            $this->registerUserValidationError['lasttName'] = $this->form_validation->set_value('lastName');
            $this->registerUserValidationError['email'] = $this->form_validation->set_value('email');
            $this->registerUserValidationError['password'] = $this->form_validation->set_value('password');
            $this->registerUserValidationError['confirmPassword'] = $this->form_validation->set_value('confrimPassword');
            $this->session->set_flashdata($this->registerUserValidationError);
            
            redirect('home/register');
        }
        var_dump($this->input->post());
        die();
    }

//------------------------------------------------------------------------------
}
