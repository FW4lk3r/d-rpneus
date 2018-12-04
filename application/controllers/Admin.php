<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	/*
		CREATE TABLE IF NOT EXISTS `ci_sessions` (
        	`id` varchar(128) NOT NULL,
        	`ip_address` varchar(45) NOT NULL,
        	`timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        	`data` blob NOT NULL,
        	KEY `ci_sessions_timestamp` (`timestamp`)
		);
	*/

	/* 
		Created: 4/12/2018
		Create a middleware of session
	*/
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		
		//Verify is user is logged
		if(current_url() != base_url('admin/login'))
			$this->verify_login();
	}

	/* 
		Created: 3/12/2018
		Load the interface admin
	*/
	public function index()
	{
        $this->load->view('admin/partials/header.php');
        $this->load->view('admin/index.html');
        $this->load->view('admin/partials/footer.php');
	}

	/* 
		Created: 3/12/2018
		Load the login page
	*/
	public function login(){
		//password_hash('teste', PASSWORD_BCRYPT);
		$this->load->view('admin/partials/header.php');
        $this->load->view('admin/login.html');
        $this->load->view('admin/partials/footer.php');
	}

	/* 
		Created: 4/12/2018
		Verify if user is logged
	*/
	public function verify_login(){
		if(!$this->session->has_userdata('logged'))
			redirect('admin/login');

	}

    
    
}