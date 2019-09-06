<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model{
	
	public function __construct(){
		
	}
	
	public function test(){
		echo 'common test model';
	}
	
}