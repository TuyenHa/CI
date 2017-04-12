<div class="infouser">
<h2 class=""><i class="fa fa-laptop" aria-hidden="true"></i>
				Thông tin tài khoản</h2>
	<table class="table table-hover table-bordered table-responsive">
		<thead>
			<tr>
				<th>Tài khoản</th><th>Email</th><th>Giới tính</th><th>Ngày sinh</th><th>Quê quán</th><th>Địa chỉ</th><th>Số điện thoại</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $infouser->tai_khoan; ?></td><td><?php echo $infouser->email; ?></td><td><?php echo $infouser->gioi_tinh; ?></td><td><?php echo $infouser->ngay_sinh; ?></td><td><?php echo $infouser->que_quan; ?></td><td><?php echo $infouser->dia_chi; ?></td><td><?php echo $infouser->sdt; ?></td>
			</tr>
		</tbody>
	</table>
</div>