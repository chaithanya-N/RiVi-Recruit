<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *      http://example.com/index.php/welcome
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
	public function index()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	 
	public function dashboard()
	{
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}
	 
	 public function myjobs()
	{
		$this->load->view('header');
		$this->load->view('myjobs');
		$this->load->view('footer');
	}
	 
 public function submissions()
	{
		$this->load->view('header');
		$this->load->view('submissions');
		$this->load->view('footer');
	}
	public function Ustatus()
	{
		$this->load->view('header');
		$this->load->view('Ustatus');
		$this->load->view('footer');
	}

	
	 

}