<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('students/profile3');
	}
	public function profile3()
	{
		$this->load->view('students/profile3');
	}
	public function profile2()
	{
		$this->load->view('students/profile2');
	}
}