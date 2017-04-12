<div class="login">
<h2 ><i class="fa fa-laptop" aria-hidden="true"></i>
				Đăng nhập tài khoản</h2>
<form action="" method="post">
	<table class="table-bordered table table-hover table-responsive">
		<tbody>
			<tr>
				<td>Tài Khoản</td><td><input type="text" class="form-control" name="txttaikhoan"><?php echo form_error('txttaikhoan') ?></td>
			</tr>
			<tr>
				<td>Mật Khẩu</td><td><input type="password" class="form-control" name="txtmatkhau"><?php echo form_error('txtmatkhau') ?></td>
			</tr>
			<tr>
				<td></td><td><input type="submit" class="btn btn-success btn-md" name="" value="Đăng Nhập"></td>
			</tr>
		</tbody>
	</table>
</form>
<?php if($message){$this->load->view('site/admin/lay_out/messager');}?>
</div>