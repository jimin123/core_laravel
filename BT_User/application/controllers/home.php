<?php
	class Home extends CI_Controller
	{
		public function __construct(){
			parent :: __construct();
			$this->load->helper('url_helper');
			$this->load->model('Muser');
			$this->load->helper('cookie');
		}
		public function index(){
			//Hiển thị views.
			$this->load->view('template/header');
			$this->load->view('home');
			$this->load->view('template/footer');
			$this->load->library('form_validation');
        }
    }
?>

