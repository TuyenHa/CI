<?php 
/**
* 
*/
class Changpass extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index(){
		$id=$this->uri->segment(2);
		$id=intval($id);
		$where=array('id'=>$id);
		$field='tai_khoan,mat_khau';
		$tenuser=$this->User_model->get_info_rule($where,$field);
		if($this->input->post()){
			$this->form_validation->set_rules('txtmatkhau', 'Mật khẩu', 'required');
			$this->form_validation->set_rules('txtmatkhaumoi', 'Mật khẩu mới', 'required');
			$this->form_validation->set_rules('txtnhaplaimatkhaumoi', 'Nhập lại mật khẩu mới', 'required');
			if($this->form_validation->run()){
				$taikhoan=$tenuser->tai_khoan;
				$matkhau=$this->input->post('txtmatkhau');
				$matkhaumoi=$this->input->post('txtmatkhaumoi');
				$nhaplaimatkhaumoi=$this->input->post('txtnhaplaimatkhaumoimatkhau');
				$data=array('tai_khoan'=>$taikhoan,'mat_khau'=>md5($matkhaumoi)
					);
				if($tenuser->mat_khau==md5($matkhau) && $this->User_model->update($id,$data)){
					$this->session->set_flashdata('message','Đổi mật khẩu thành công');

				}else{
					$this->session->set_flashdata('message','Đổi mật khẩu không thành công.Vui lòng xem lại mật khẩu cũ');
				}
				
			}
		}
		$message=$this->session->flashdata('message');
		$this->data['message']=$message;
		$this->data['tenuser']=$tenuser;
		$this->data['temp']='site/lay_out/changpass';
		$this->load->view('site/index',$this->data);
	}
	
}


?>