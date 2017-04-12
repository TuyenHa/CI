<form method="post">
	<table class="table-responsive table table-bordered">
		<thead>
			<tr>
				<th class="title">Sửa Thành Viên</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tài Khoản</td><td><input type="text" class="form-control" value="<?php echo $row->tai_khoan ?>" name="txttaikhoan"><?php echo form_error('txttaikhoan') ?></td>
			</tr>
			<tr>
				<td>Mật Khẩu</td><td><input type="password" class="form-control" value="<?php  echo $row->mat_khau; ?>"  name="txtmatkhau"><?php echo form_error('txtmatkhau') ?></td>
			</tr>
			<tr>
				<td>Nhập Lại Mật Khẩu</td><td><input type="password" class="form-control" value="<?php echo $row->mat_khau; ?>" name="txtnhaplaimatkhau"><?php echo form_error('txtnhaplaimatkhau'); ?></td>
			</tr>
			<tr>
				<td>Email</td><td><input type="text" class="form-control" value="<?php echo $row->email ?>" name="txtemail"><?php echo form_error('txtemail'); ?></td>
			</tr>
			<tr>
				<td>Giới Tính</td><td><select name="slgioitinh" value="<?php echo $row->gioi_tinh ?>" class="form-control">
				<option value="Nam">Nam</option>
				<option value="Nữ">Nữ</option>
			</select><?php echo form_error('slgioitinh') ?></td>
		</tr>
		<tr>
			<td>Ngày Sinh</td><td><input type="text" class="form-control" value="<?php echo $row->ngay_sinh ?>" name="txtngaysinh"><?php echo form_error('txtngaysinh'); ?></td>
		</tr>
		<tr>
			<td>Quê Quán</td><td><input type="text" class="form-control" value="<?php echo $row->que_quan ?>" name="txtquequan"><?php echo form_error('txtquequan'); ?></td>
		</tr>
		<tr>
			<td>Địa Chỉ</td><td><input type="text" class="form-control" value="<?php echo $row->dia_chi ?>" name="txtdiachi"><?php echo form_error('txtdiachi');
			?></td>
		</tr>
		<tr>
			<td>Số Điện Thoại</td><td><input type="text" class="form-control" value="<?php echo $row->sdt ?>" name="txtsdt"><?php echo form_error('txtsdt'); ?></td>
		</tr>
		<tr>
			<td>Phân Quyền</td><td><select name="slphanquyen"  value="<?php echo $row->phan_quyen ?>" class="form-control">
			<option value="1">1</option>
			<option value="0">0</option>
		</select><?php echo form_error('slphanquyen') ?></td>
	</tr>
	<tr>
		<td></td><td><input type="Submit" name="ok" class="btn btn-danger" value="Sửa Thành Viên"></td>
	</tr>
</tbody>
</table>
</form>