<?php 
	class Faq extends CI_Controller {
		function __construct ()
		{
			parent::__construct();
		}
		function index() {
			$this->load->library('../controllers/login');
			$isLoggedIn = $this->login->loggedin();	
			$data['loggedin'] = $isLoggedIn;
			
			if($isLoggedIn > 0) {
				$data['firstname'] = $this->session->userdata('fname');
				$data['lastname'] = $this->session->userdata('lname');
				$data['main_content'] = 'faq';
				$this->load->view('members_area', $data);
			}
			else{
				$data['main_content'] = 'faq';
				$this->load->view('_main_layout', $data);
			}
		}
		/*function index() {
			$data['main_content'] = 'home';
			$this->load->view('faq', $data);
		}*/
	}
