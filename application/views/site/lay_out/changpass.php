<div class="changpass">
<h2 class="changpassh2"><i class="fa fa-laptop" aria-hidden="true"></i>
				Đổi mật khẩu</h2>
<form action="" method="post">
<?php if($message){$this->load->view('site/admin/lay_out/messager');}?>
	<table class="table-responsive table table-hover table-bordered">
		<tbody>
			<tr>
				<td>Tài khoản</td><td><input type="text" name="txttaikhoan" class="form-control" value="<?php echo $tenuser->tai_khoan; ?>" readonly=""></td>
			</tr>
			<tr>
				<td>Mật khẩu cũ</td><td><input type="password" name="txtmatkhau" class="form-control" value="<?php echo set_value('txtmatkhau') ?>"><?php echo form_error('txtmatkhau') ?></td>
			</tr>
			<tr>
				<td>Mật khẩu mới</td><td><input type="password" name="txtmatkhaumoi" class="form-control" value="<?php echo set_value('txtmatkhaumoi') ?>"><?php echo form_error('txtmatkhaumoi') ?></td>
			</tr>
			<tr>
				<td>Nhập lại mật khẩu mới</td><td><input type="password" name="txtnhaplaimatkhaumoi" class="form-control" value="<?php echo set_value('txtnhaplaimatkhaumoi') ?>"><?php echo form_error('txtnhaplaimatkhaumoi') ?></td>
			</tr>
			<tr><td></td><td><input type="submit" class="btn btn-success btn-md" value="Đổi mật khẩu"></td></tr>
		</tbody>
	</table>
</form>
</div>