<?php 
class Login extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index(){
		if($this->input->post()){
			$this->form_validation->set_rules('txttaikhoan', 'Tài Khoản', 'required');
			$this->form_validation->set_rules('txtmatkhau', 'Mật Khẩu', 'required');
			if($this->form_validation->run()){
				$taikhoan=$this->input->post('txttaikhoan');
				$matkhau=$this->input->post('txtmatkhau');
				$where=array('tai_khoan'=>$taikhoan,'mat_khau'=>md5($matkhau));
				$field='tai_khoan,mat_khau';
				if($this->User_model->get_info_rule($where,$field)){
					$this->session->set_flashdata('message','Đăng nhập thành công');
					$getuser=$this->User_model->get_info_rule($where,$field);
				$user=$getuser->tai_khoan;
				$username=array('tai_khoan'=>$user);
				$this->session->set_userdata($username);
				redirect(base_url());
				}else{
					$this->session->set_flashdata('message','Đăng nhập không thành công');
				}
			}
		}
		$getusername=$this->session->userdata('tai_khoan');
		$message=$this->session->flashdata('message');
		$this->data['temp']='site/lay_out/login';
		$this->data['message']=$message;
		$this->data['getusername']=$getusername;
		$this->load->view('site/index',$this->data);
	}
}
?>