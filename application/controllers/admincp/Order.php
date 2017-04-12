<?php 
class Order extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Order_model');
		$this->load->library('email');
	}
	public function addorder(){
		if($this->input->post()){
			$this->form_validation->set_rules('txthoten', 'Họ tên', 'required|min_length[5]|max_length[20]');
			$this->form_validation->set_rules('txtemail', 'Email', 'required|min_length[5]|max_length[20]');
			$this->form_validation->set_rules('txtsdt', 'Số điện thoại', 'required|numeric');
			$this->form_validation->set_rules('txthinhthuc', 'Hình thức thanh toán', 'required');
			if($this->form_validation->run()){
				$hoten=$this->input->post('txthoten');
				$hoten=$this->input->post('txtemail');
				$hoten=$this->input->post('txtsdt');
				$hoten=$this->input->post('txthinhthuc');
				$config['protocol']='sendmail';
				$config['charset']='utf-8';
				$config['mailtype']='html';
				$config['wordwrap']=TRUE;
				$config['smtp_host']='smtp';
				$config['smtp_host']= 'ssl://smtp.googlemail.com'; 
				$config['smtp_user']= 'hatuyen1994@gmail.com';
				$config['smtp_pass']= 'hatuyen123';
				$config['smtp_port']= '465'; 
				$this->email->initialize($config);
				$this->email->from('hatuyen1994@gmail.com', 'Admin Shop HD');
				$this->email->to('someone@example.com');
				$this->email->subject('Đơn hàng mua laptop tại SHOP HD');
				$this->email->message('Nội dung gửi mail.');
				if ( ! $this->email->send())
				{
					echo $this->email->print_debugger();
				}else{
					echo 'Gửi email thành công';
				}
			}
		}
	}
}

?>