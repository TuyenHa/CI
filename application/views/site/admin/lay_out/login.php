<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>template/css/bootstrap.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="<?php echo base_url();?>template/css/bootstrap-theme.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script type="text/javascript" src="<?php echo base_url();?>template/js/jquery-3.1.1.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/admin.css">


</head>
<body>
	<?php
	$tai_khoan=$this->session->userdata('tai_khoan');
	if(isset($tai_khoan)){ 
		redirect(base_url().'admincp/content');
	}else{
		?>
		<form  method="post">
			<div class="admin">
				<table class="table table-bordered table-responsive login1">
					<thead>
						<tr>
							<th colspan="2" class="">ĐĂNG NHẬP HỆ THỐNG</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Tài Khoản :</td><td><input type="text" class="form-control" name="txttaikhoan" placeholder="Nhập tài khoản" required><?php form_error('txttaikhoan') ?></td>
						</tr>
						<tr>
							<td>Mật Khẩu :</td><td><input type="password" class="form-control" name="txtmatkhau" placeholder="Nhập mật khẩu" required><?php form_error('txtmatkhau') ?></td>
						</tr>
						<tr>
							<td></td><td><input type="submit" class="btn btn-md btn-primary" name="ok" value="Đăng Nhập"> <input type="submit" class="btn btn-md btn-primary" name="submit1" value="Nhập Lại"></td>
						</tr>
					</tbody>
				</table>
				<?php if($error){$this->load->view('site/admin/lay_out/error',$this->data);}else{} ?>

			</div>
		</form>
		<?php
	}
	?>
</body>
</html>
