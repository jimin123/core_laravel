<?php
	class Muser extends CI_Model
	{
		var $table = 'user';
		public function __construct(){
			parent :: __construct();
		}
		public function insert($data = array()){
			if($this->db->insert($this->table,$data)){
				return true;
			}else{
				return false;
			}
		}
		//Kiểm tra sự tồn tại của dữ liệu theo 1 điều kiện nào đó.
		//Biến $where sẽ mang dữ liệu điều kiện.
		public function check_exit($where = array()){
			$this->db->where($where);
			//Thực hiện câu truy vấn lấy dữ liệu.
			$query = $this->db->get($this->table);
			if($query->num_rows() > 0){
				return true;
			}else{
				return false;
			}
		}
		/*Lấy thông tin thành viên.*/
		public function get_user_info($where = array()){
			//tạo điều kiện cho câu truy vấn.
			$this->db->where($where);
			$result = $this->db->get('user');
			return $result->row();
		}
	}
?>