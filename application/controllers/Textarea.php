<?php


class Textarea extends CI_CONTROLLER{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('backend/header');
            $this->load->view('backend/textarea');
            $this->load->view('backend/footer');  
	}
}

