<?php 
class Index extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}
	function index(){
		if($this->input->post()){
			$this->form_validation->set_rules('txttaikhoan','Tài Khoản','required|min_length[4]');
			$this->form_validation->set_rules('txtmatkhau','Mật Khẩu','required|min_length[4]');
			if($this->form_validation->run()){
				$taikhoan=$this->input->post('txttaikhoan');
				$matkhau=$this->input->post('txtmatkhau');
				$field='tai_khoan,mat_khau';
				$where=array('tai_khoan'=>$taikhoan,'mat_khau'=>md5($matkhau));
				print_r($where);
				print_r($this->User_model->get_info_rule($where,$field));
				if($this->User_model->get_info_rule($where,$field)){
					$getuser=$this->User_model->get_info_rule($where,$field);
					$user=$getuser->tai_khoan;
					$username=array('tai_khoan'=>$user);
					$this->session->set_userdata($username);
					redirect(base_url().'admincp/content');
				}else{
					$this->session->set_flashdata('error','Bạn không có quyền truy cập trang này.Ấn vào <a href="http://localhost/ciweb" title="">Đây</a>để về trang chủ');
				}
			}
		}
		$error=$this->session->flashdata('error');
		$this->data['error']=$error;
		$this->load->view('site/admin/lay_out/login',$this->data);
	}
	function logout(){
		$tai_khoan=$this->session->userdata('tai_khoan');
		if(isset($tai_khoan)){
			$this->session->unset_userdata('tai_khoan');
			redirect(base_url().'admincp.html');
		}
		
	}
}


?>