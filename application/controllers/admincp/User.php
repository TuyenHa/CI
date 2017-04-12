<?php 
class User extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index(){
		$list_User=$this->user_model->getList();
		$message=$this->session->flashdata('message');
		$this->data['list_User']=$list_User;
		$this->data['message']=$message;
		$this->data['temp']='site/admin/lay_out/user';
		$this->load->view('site/admin/index',$this->data);
	}
	public function adduser(){
		if($this->input->post()){
			$this->form_validation->set_rules('txttaikhoan','Tài Khoản','required');
			$this->form_validation->set_rules('txtmatkhau','Mật Khẩu','required|min_length[4]');
			$this->form_validation->set_rules('txtnhaplaimatkhau','Nhập Lại Mật Khẩu','required|min_length[4]');
			$this->form_validation->set_rules('txtemail','Email','required|valid_email');
			$this->form_validation->set_rules('slgioitinh','Giới Tính','required');
			$this->form_validation->set_rules('txtngaysinh','Ngày Sinh','required');
			$this->form_validation->set_rules('txtquequan','Quê Quán','required');
			$this->form_validation->set_rules('txtdiachi','Địa Chỉ','required');
			$this->form_validation->set_rules('txtsdt','Điện Thoại','required');
			$this->form_validation->set_rules('slphanquyen','Phân Quyền','required');
			if($this->form_validation->run()){
				$taikhoan=$this->input->post('txttaikhoan');
				$matkhau=$this->input->post('txtmatkhau');
				$email=$this->input->post('txtemail');
				$gioitinh=$this->input->post('slgioitinh');
				$ngaysinh=$this->input->post('txtngaysinh');
				$quequan=$this->input->post('txtquequan');
				$diachi=$this->input->post('txtdiachi');
				$sdt=$this->input->post('txtsdt');
				$phanquyen=$this->input->post('slphanquyen');
				$data=array('tai_khoan'=>$taikhoan,
					'mat_khau'=>$matkhau,
					'email'=>$email,
					'gioi_tinh'=>$gioitinh,
					'ngay_sinh'=>$ngaysinh,
					'que_quan'=>$quequan,
					'dia_chi'=>$diachi,
					'sdt'=>$sdt,
					'phan_quyen'=>$phanquyen
					);
				$sql=$this->user_model->insert($data);
				print_r($sql);
				if($this->user_model->insert($data)){
					$this->session->set_flashdata('message','Thêm thành công');
				}else{
					$this->session->set_flashdata('message','Thêm không thành công');
				}
				redirect(base_url().'admincp/user/index');

			}

		}
		$this->data['temp']='site/admin/lay_out/adduser';
		$this->load->view('site/admin/index',$this->data);
	}
	public function edituser(){
		$id=$this->uri->segment(4);
		$id=intval($id);
		$filed='tai_khoan,mat_khau,email,gioi_tinh,ngay_sinh,que_quan,dia_chi,sdt,phan_quyen';
		$row=$this->user_model->get_info($id,$filed);
		if($this->input->post()){
			$this->form_validation->set_rules('txttaikhoan','Tài Khoản','required');
			$this->form_validation->set_rules('txtmatkhau','Mật Khẩu','required|min_length[4]');
			$this->form_validation->set_rules('txtnhaplaimatkhau','Nhập Lại Mật Khẩu','required|min_length[4]');
			$this->form_validation->set_rules('txtemail','Email','required|valid_email');
			$this->form_validation->set_rules('slgioitinh','Giới Tính','required');
			$this->form_validation->set_rules('txtngaysinh','Ngày Sinh','required');
			$this->form_validation->set_rules('txtquequan','Quê Quán','required');
			$this->form_validation->set_rules('txtdiachi','Địa Chỉ','required');
			$this->form_validation->set_rules('txtsdt','Điện Thoại','required');
			$this->form_validation->set_rules('slphanquyen','Phân Quyền','required');
			if($this->form_validation->run()){
				$taikhoan=$this->input->post('txttaikhoan');
				$matkhau=$this->input->post('txtmatkhau');
				$email=$this->input->post('txtemail');
				$gioitinh=$this->input->post('slgioitinh');
				$ngaysinh=$this->input->post('txtngaysinh');
				$quequan=$this->input->post('txtquequan');
				$diachi=$this->input->post('txtdiachi');
				$sdt=$this->input->post('txtsdt');
				$phanquyen=$this->input->post('slphanquyen');
				$data=array('tai_khoan'=>$taikhoan,
					'mat_khau'=>$matkhau,
					'email'=>$email,
					'gioi_tinh'=>$gioitinh,
					'ngay_sinh'=>$ngaysinh,
					'que_quan'=>$quequan,
					'dia_chi'=>$diachi,
					'sdt'=>$sdt,
					'phan_quyen'=>$phanquyen
					);
				$sql=$this->user_model->update($id,$data);
				print_r($sql);
				if($this->user_model->update($id,$data)){
					$this->session->set_flashdata('message','Sửa thành công');
				}else{
					$this->session->set_flashdata('message','Sửa không thành công');
				}
				redirect(base_url().'admincp/user/index');

			}

		}
		$this->data['row']=$row;
		$this->data['temp']='site/admin/lay_out/edituser';
		$this->load->view('site/admin/index',$this->data);
	}
	public function deleteuser(){
		$id=$this->uri->segment('4');
		$id=intval($id);
		if($this->user_model->delete($id)){
		}else{
			$this->session->set_flashdata('message','Xóa không thành công');
		}
		redirect(base_url().'admincp/user/index');
	}
}


?>