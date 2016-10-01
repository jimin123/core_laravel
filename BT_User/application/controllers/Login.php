<?php
	class Login extends CI_Controller
	{
		public function __construct(){
			parent :: __construct();
			$this->load->model('Muser');
		}
		public function index(){
			if ($this->user_is_login() == true){
				redirect(base_url('index.php/home'));
			}
			//Load thư viện validation.
			$this->load->library('form_validation');
			$this->load->helper('form');
			//Kiểm tra nếu người dùng nhấn submit.
			if ($this->input->post()){
				//Khởi tạo các cặp luật.
				$this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->set_rules('remember', 'Ghi Nhớ', 'callback_check_remember');
				$this->form_validation->set_rules('login', 'Đăng Nhập', 'callback_check_login');
				if ($this->form_validation->run()){
					
				}
			}
			//Hiển thị views.
			$this->load->view('template/header');
			$this->load->view('login');
			$this->load->view('template/footer');
		}
		//Hàm đăng nhập.
		public function check_login(){
			//Lấy dữ liệu từ form.
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$password = md5($password);
			$where = array('username' => $username,
							'password' => $password);
			if (!$this->Muser->get_user_info($where)){
				//Trả về thông báo lỗi đăng nhập thành công hay không.
				$this->form_validation->set_message(__FUNCTION__,'Đăng nhập không thành công !');
				return false;
			}else{
				$this->session->set_userdata('username',$username);
				redirect(base_url('index.php/home'));
			}
		}
		//kiểm tra khi người dùng check remember thì lưu vào cookie
		public function check_remember(){
			$username = $this->input->post('username');
			$remember = $this->input->post('remember');
			if ($remember == 1){
                setcookie('username', $username, time() +3600);
            }
		}
		//Kiểm tra đã đăng nhập hay chưa.
		public function user_is_login(){
			$username = $this->input->post('username');
			$user_data = $this->session->get_userdata('username',$username);
			//nếu chưa login.
			if (!$user_data){
				return false;
			}else{
				return True;
			}
		}
	} 
?>