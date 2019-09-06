<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->model('test_model');
		// $this->test_model->test();
		$this->load->view('welcome_message');
	}
	
}
