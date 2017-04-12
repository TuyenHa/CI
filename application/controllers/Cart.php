<?php 
class Cart extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('admin_model');
		$this->load->model('Order_model');
		$this->load->library('email');
	}
	public function index(){
		$showcart=$this->cart->contents();
		$total = $this->cart->total_items();
		$total_pri=$this->cart->total();
		$this->data['showcart']=$showcart;
		$this->data['total_pri']=$total_pri;
		$this->data['total']=$total;
		/*foreach ($showcart as $key => $value) {
			# code...
			$id=$value['id'];
			$tensanpham =$value['name'];
			$gia= $value['price'];
			$tongtien=$value['subtotal'];
			
		}
		/*order*/
/*
		if($this->input->post()){
			$this->form_validation->set_rules('txthoten', 'Họ tên', 'required');
			$this->form_validation->set_rules('txtemail', 'Email', 'required');
			$this->form_validation->set_rules('txtsdt', 'Số điện thoại', 'required|numeric');
			$this->form_validation->set_rules('txthinhthuc', 'Hình thức thanh toán', 'required');
			if($this->form_validation->run()){
				$hoten=$this->input->post('txthoten');
				$email=$this->input->post('txtemail');
				$sdt=$this->input->post('txtsdt');
				$hinhthuc=$this->input->post('txthinhthuc');
				$config=array();
				$dataproduct=array('ho_ten'=>$hoten,'email'=>$email,'sdt'=>$sdt,'hinh_thuc_thanh_toan'=>$hinhthuc,'ten_san_pham'=>$tensanpham,'so_luong'=>$total,'gia'=>$gia,'tong_tien'=>$tongtien);
				$config['protocol']='smtp';
				$config['smtp_host']='ssl://smtp.googlemail.com';
				$config['smtp_port']=465;
				$config['smtp_timeout']=30;
				$config['smtp_user']='hatuyen1994@gmail.com';
				$config['smtp_pass']='hatuyen123';
				$config['charset']='utf-8';
				$config['newline']="\r\n";
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = 'html';
				$this->email->initialize($config);
				$this->email->from('hatuyen1994@gmail.com', 'Shop Computer HD');
				$this->email->to($email);
				$this->email->subject('Đơn hàng máy tính shop HD');
				$this->email->message("<table border='1' cellpadding='0' cellspacing='0'>
					<thead>
						<tr>
							<th>Tên khách hàng</th><th>Email</th><th>Số điện thoại</th><th>Hình thức thanh toán</th><th>Tên sản phẩm</th><th>Số lượng</th><th>Giá</th><th>Tổng tiền</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>".$hoten."</td><td>".$email."</td><td>".$sdt."</td><td>".$hinhthuc."</td><td>".$tensanpham."</td><td>".$total."</td><td>".$gia."USD</td><td>".$tongtien."USD</td>
						</tr>
					</tbody>
				</table>");
				if (!$this->email->send())
				{
					echo $this->email->print_debugger();
				}else{
					$this->session->set_flashdata('message','Gửi đơn hàng thành công.Hãy kiểm tra email để xem thông tin đơn hàng.Xin cảm ơn');
				}
			}
		}*/
		/*order*/
		$message=$this->session->flashdata('message');
		$this->data['temp']='site/lay_out/cart';
		$this->data['message']=$message;
		$this->load->view('site/index',$this->data);
	}

	public function addcart(){
		$id=$this->uri->segment('3');
		$id=intval($id);
		$where=array('id'=>$id);
		$field='id,ten_san_pham,so_luong,gia,anh_san_pham';
		$getproduct=$this->admin_model->get_info_rule($where,$field);
		$cart = array(
			'id'    => $getproduct->id,
			'qty'   => '1',
			'price' => $getproduct->gia,
			'name'  => $getproduct->ten_san_pham,
			'image'=>$getproduct->anh_san_pham
			);
		$this->cart->insert($cart);
		redirect(base_url().'gio-hang.html');
		$this->data['temp']='site/lay_out/cart';
		$this->data['getproduct']=$getproduct;
		$this->load->view('site/index',$this->data);
	}
	public function update(){
		$cart = $this->cart->contents();
		$id=$this->uri->segment('3');
		$id=intval($id);
		if($this->input->post()){
			$this->form_validation->set_rules('txtsoluong','','required');
			if($this->form_validation->run()){
				$soluong=$this->input->post('txtsoluong');
				echo $soluong;
				echo "<pre>";
				print_r ($cart);
				echo "</pre>";
				foreach ($cart as $key => $value)
				{
             //Kiểm tra nếu id của sản phẩm trong giỏ hàng = id sản phẩm muốn cập nhật
					if($value['id'] == $id)
					{
						$data = array(
							'rowid' => $key,
							'qty'   => '4'
							);
                 //cap nhat lai gio hang
						$this->cart->update($data);
						break;
					}
				}
			}
		}
		$this->data['temp']='site/lay_out/cart';
		$this->load->view('site/index',$this->data);
		//redirect(base_url().'cart');
	}
	public function del(){
		$id = $this->uri->segment('3');
		$id=intval($id);
		$carts = $this->cart->contents();
		foreach ($carts as $key => $value)
		{
			if($value['id'] == $id)
			{
				$data = array(
					'rowid' => $key,
                       'qty'   => 0,//cập nhật số lượng = 0
                       );
                 //cap nhat lai gio hang
				$this->cart->update($data);
                 //thoát khỏi vòng lặp
				break;
			}
		}
		redirect(base_url().'cart');

	}
	public function emptycart(){
		$this->cart->destroy();
		redirect(base_url().'cart');
	}

}
?>
