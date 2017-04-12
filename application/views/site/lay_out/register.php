<div class="register">
	<h2 ><i class="fa fa-laptop" aria-hidden="true"></i>
		Đăng kí tài khoản</h2>
		<form action="" method="post">
			<table class="table-bordered table table-hover table-responsive">
				<tbody>
					<tr>
						<td>Tài khoản</td><td><input type="text" class="form-control" name="txttaikhoan" value="<?php set_value('txttaikhoan') ?>" required><?php echo form_error('txttaikhoan') ?></td>
					</tr>
					<tr>
						<td>Mật khẩu</td><td><input type="password" class="form-control" name="txtmatkhau" value="<?php set_value('txtmatkhau') ?>" required><?php echo form_error('txtmatkhau') ?></td>
					</tr>
					<tr>
						<td>Nhập lại mật khẩu</td><td><input type="password" class="form-control" value="<?php set_value('txtnhaplaimatkhau') ?>" name="txtnhaplaimatkhau" required><?php echo form_error('txtnhaplaimatkhaumatkhau') ?></td>
					</tr>
					<tr>
						<td>Email</td><td><input type="email" class="form-control" name="txtemail" value="<?php set_value('txtemail') ?>" required><?php echo form_error('txtemail') ?></td>
					</tr>
					<tr>
						<td>Giới tính</td><td><select required name="slgioitinh" class="form-control">
						<option value="Nam">Nam</option>
						<option value="Nữ">Nữ</option>
					    </select><?php echo form_error('slgioitinh') ?></td>
				     </tr>
				<tr>
					<td>Ngày sinh</td><td><input type="date" class="form-control" name="txtngaysinh" required value="<?php set_value('txtngaysinh') ?>"><?php echo form_error('txtngaysinh') ?></td>
				</tr>
				<tr>
					<td>Quê quán</td><td><input type="text" class="form-control" name="txtquequan" required value="<?php set_value('txtquequan') ?>"><?php echo form_error('txtquequan') ?></td>
				</tr>
				<tr>
					<td>Địa chỉ</td><td><input type="text" class="form-control" name="txtdiachi" required value="<?php set_value('txtdiachi') ?>"><?php echo form_error('txtdiachi') ?></td>
				</tr>
				<tr>
					<td>Số điện thoại</td><td><input type="text" class="form-control" name="txtsdt" required value="<?php set_value('txtsdt') ?>"><?php echo form_error('txtsdt') ?></td>
				</tr>
				<tr>
					<td></td><td><input type="submit" class="btn btn-primary btn-md" name="" value="Đăng Kí"></td>
				</tr>
			</tbody>
		</table>
	</form>
	<?php if($message){$this->load->view('site/admin/lay_out/messager');}?>
</div>