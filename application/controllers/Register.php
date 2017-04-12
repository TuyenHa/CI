<?php 
/**
* 
*/
class Register extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	function index(){
		if($this->input->post()){
			$this->form_validation->set_rules('txttaikhoan', 'Tài khoản', 'required|callback_check_user');
			$this->form_validation->set_rules('txtmatkhau', 'Mật khẩu cũ', 'required');
			$this->form_validation->set_rules('txtnhaplaimatkhau', 'Nhập lại mật khẩu', 'required');
			$this->form_validation->set_rules('txtemail', 'Email', 'required|callback_check_user');
			$this->form_validation->set_rules('slgioitinh', 'Giới tính', 'required');
			$this->form_validation->set_rules('txtngaysinh', 'Ngày sinh', 'required');
			$this->form_validation->set_rules('txtquequan', 'Quê quán', 'required');
			$this->form_validation->set_rules('txtdiachi', 'Địa chỉ', 'required');
			$this->form_validation->set_rules('txtsdt', 'Số điện thoại', 'required|numeric');
			if ($this->form_validation->run()) {
				$taikhoan=$this->input->post('txttaikhoan');
				$matkhau=$this->input->post('txtmatkhau');
				$nhaplaimatkhau=$this->input->post('txtnhaplaimatkhau');
				$email=$this->input->post('txtemail');
				$gioitinh=$this->input->post('slgioitinh');
				$ngaysinh=$this->input->post('txtngaysinh');
				$quequan=$this->input->post('txtquequan');
				$diachi=$this->input->post('txtdiachi');
				$sdt=$this->input->post('txtsdt');
				$data=array(
					'tai_khoan'=>$taikhoan,
					'mat_khau'=>md5($matkhau),
					'email'=>$email,
					'gioi_tinh'=>$gioitinh,
					'ngay_sinh'=>$ngaysinh,
					'que_quan'=>$quequan,
					'dia_chi'=>$diachi,
					'sdt'=>$sdt,
					'phan_quyen'=>'0',
					);
				if($this->User_model->insert($data)){
					$this->session->set_flashdata('message','Đăng kí thành công');
				}else{
					$this->session->set_flashdata('message','Đăng kí không thành công');
				}
			}
		}
		$message=$this->session->flashdata('message');
		$this->data['message']=$message;
		$this->data['temp']='site/lay_out/register';
		$this->load->view('site/index',$this->data); 
	}
	function check_user(){
		$taikhoan=$this->input->post('txttaikhoan');
		$email=$this->input->post('txtemail');
		$where=array('tai_khoan'=>$taikhoan,'email'=>$email);
		if($this->User_model->check_exists($where)){
			$this->form_validation->set_message(__FUNCTION__,"Tài khoản hoặc email đã được đăng kí");
			return false;
		}
		return true;
	}
}


?>