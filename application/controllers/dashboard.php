<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard
 *
 * @author Olaleye
 */
class Dashboard extends CI_Controller {

    /**
     * 
     * This method loads the dashboard
     * 
     */
    public function index() {
        $this->load->view('inc/header');
		$this->load->view('inc/sidebar');
        $this->load->view('/dashboard/dashboard_view');
        $this->load->view('inc/footer');
    }
    
    /**
     * 
     * This method destorys the session and redirects the user 
     * back to the home page
     * 
     */
    public function logout(){
        session_destroy();
        redirect('/');
    }

}
