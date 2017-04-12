<?php 
class Pay extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Order_model');
		$this->load->library('email');
	}
	function index(){
		$pay=$this->cart->contents();
		$total = $this->cart->total_items();
		$total_pri=$this->cart->total();
		$this->data['pay']=$pay;
		$this->data['total_pri']=$total_pri;
		$this->data['total']=$total;
		echo "<pre>";
		print_r ($pay);
		echo "</pre>";	
		foreach ($pay as $key => $value) {
			# code...
			$id=$value['id'];
			$tensanpham =$value['name'];
			$gia= $value['price'];
			$tongtien=$value['subtotal'];
			$soluong=$value['qty'];
		}
		/*order*/

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
				$payg=array('ho_ten'=>$hoten,'tensanpham'=>$tensanpham,'email'=>$email,'sdt'=>$sdt,'hinh_thuc'=>$hinhthuc,'so_luong'=>$total,'gia'=>$gia,'tong_tien'=>$tongtien);
				echo "<pre>";
				print_r ($payg);
				echo "</pre>";
				$this->email->message('<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		body{
			margin: 0;
			padding:0;
		}
		#wrapper{
			background: #EEEEEE;
			width: 1000px;
			margin: 0 auto;
		}
		.logo{
			float: left;
			padding-top:20px; 
		}
		.clearfix{
			clear: both;
		}
		.content{
			text-align: center;
		}
		.content h2{
			color: blue;
			text-align: center;
			font-size: 23px;
		}
		.content table{
			margin-top:20px; 
		}
	</style>

</head>

<body>
	<div id="wrapper">
		<div class="logo">
			<img src="http://imagizer.imageshack.us/a/img922/4446/BFifep.png" alt="">
		</div>
		<div class="clearfix">
			
		</div>
		<div class="content">
			<h2>Đơn hàng của bạn</h2>
			<b style="float: left;">Xin Chào Qúy Khách.</b>
			<div class="clearfix">
			</div>
			<p style="text-align: left; ">Lời đầu tin cho shop cảm ơn đến quý khách đã quan tâm và mua hàng tại Shop HD .Địa chỉ số 454 Minh Khai Hai Bà Trưng Hà Nội.Mình xin gửi bạn thông tin mặt hàng mà bạn đã đặt bên mình.Vậy mong bạn kiểm tra lại thông tin sản phẩm ,bên mình sẽ liên lạc lại cho bạn để xác nhận đơn hàng cũng như hoàn tất các thủ tục giao hàng .</p>
			<b style="float: left;">Cảm ơn quý khách !</b>
			<div class="clearfix">
			</div>
			<table border="1" cellpadding="0" cellspacing="0" align="center">
				<thead>
					<tr>
						<th>Tên khách hàng</th><th>Email</th><th>Số điện thoại</th><th>Hình thức thanh toán</th><th>Tên sản phẩm</th><th>Số lượng</th><th>Giá</th><th>Tổng tiền</th>
					</tr>
				</thead>
				<tbody>
				
					<tr>
						<td>'.$hoten.'</td><td>'.$email.'</td><td>'.$sdt.'</td><td>'.$hinhthuc.'</td><td>'.$tensanpham.'</td><td>'.$total.'</td><td>'.$gia.'USD</td><td>'.$tongtien.'USD</td>
					</tr>
					
				</tbody>
			</table>
		</div>
		<hr/>
		<div class="footer">
		<p style="font-weight: bold;">Cơ sơ 1: Địa chỉ 454 Minh Khai Hai Bà Trưng Hà Nội</p>
		<p style="font-weight: bold;">Cơ sở 2: Ninh Giang Hải Dương</p>
		</div>
	</div>
</body>
</html>');
				if (!$this->email->send())
				{
					echo $this->email->print_debugger();
				}else{
					$this->session->set_flashdata('message','Gửi đơn hàng thành công.Hãy kiểm tra email để xem thông tin đơn hàng.Xin cảm ơn');
				}
			}
		}
		/*order*/
		$message=$this->session->flashdata('message');
		$this->data['message']=$message;
		$this->data['temp']='site/lay_out/pay';
		$this->load->view('site/index',$this->data);
	}
}

?>
