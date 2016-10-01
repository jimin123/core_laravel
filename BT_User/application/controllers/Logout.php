<?php
	class Logout extends CI_controller
	{
		public function __construct(){
			parent :: __construct();
			$this->load->helper('url_helper');
		}
		public function index(){
			$this->session->sess_destroy();
			if (isset($_COOKIE['username'])){
				$username = $_COOKIE['username'];
				setcookie('username', $username, time() -3600);
			}
			redirect(base_url('index.php/login'));
		}
	}
?>