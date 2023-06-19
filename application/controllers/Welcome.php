<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->helper('url_helper');
		$this->load->view('indexhaut');
		$this->load->view('indexgauche');
		$this->load->view('index');
		$this->load->view('indexbas');
	}		
}
