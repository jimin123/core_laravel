<?php 
	class Register extends CI_Controller
	{
	    public function __construct(){
			parent :: __construct();
			//tải thư viện hỗ trợ đường dẫn base_url().
			$this->load->helper('url_helper');
			//Tải thư viện và helper của Form  trên Codegniter.
			$this->load->helper(array('form', 'url', 'cookie'));
			$this->load->library(array('form_validation'),'session');
			//Tải model.
			$this->load->model('Muser');
		}
		public function index(){
			//oad thư viện validation.
			$this->load->library('form_validation');
			$this->load->helper('form');
			//Kiểm tra nếu người dùng nhấn submit.
			if ($this->input->post()){
				//Tạo các cặp luật.
			    //name:  bắt buộc - tối thiểu 8 ký tự
		        $this->form_validation->set_rules('username', 'Tên tài khoản',                           'required|min_length[8]|callback_check_username');     
		        //password:  bắt buộc - tối thiểu 6 ký tự - phai la số
		       $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
		        //re_password:  bắt buộc - phải giống với password
		       $this->form_validation->set_rules('re_password', 'Mật Khẩu nhập lại', 'required|matches[password]');
		       if ($this->form_validation->run()){
		       	//Dữ liệu post lên được đưa vào CSDL.
		       	$username = $this->input->post('username');
		       	$password = $this->input->post('password');
		       	$data = array(
		       		'username' => $username,
		       		'password' => md5($password)
		       		);
		       	//Gọi hàm insert() từ model.
		       	if ($this->Muser->insert($data)){
		       		echo 'Thêm thành công';

		       	}else{
		       		echo 'Thêm thất bại';
		       	}
		       	//Chuyển tới trang đăng nhập.
		       	redirect(base_url('index.php/login'));
		       }
			}
			//Hiển thị view.
			$this->load->view('template/header');
			$this->load->view('register');
			$this->load->view('template/footer');
			
			
		}
		//Kiểm tra username đã tồn tại chưa.
		public function check_username(){
			$username = $this->input->post('username');
			$where = array('username' => $username);
			if ($this->Muser->check_exit($where)){
				$this->form_validation->set_message(__FUNCTION__,'Tài khoản đã tồn tại');
				return false;
			}else{
				return true;
			}
		}
	}
?>