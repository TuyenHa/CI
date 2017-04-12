<?php if($message){ $this->load->view('site/admin/lay_out/messager');} ?>
<table class="table table-bordered table-hover table-responsive">
	
	<thead>
	<tr><th class="title">Danh Sách</th></tr>
		<tr>
			<th>Tài Khoản</th><th>Email</th><th>Giới Tính</th><th>Ngày Sinh</th><th>Quê Quán</th><th>Địa Chỉ</th><th>Số Điện Thoại</th><th>Chức Năng</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($list_User as $key): ?>
		
		<tr>
			<td><?php echo $key->tai_khoan ?></td><td><?php echo $key->email ?></td><td><?php echo $key->gioi_tinh ?></td><td><?php echo $key->ngay_sinh ?></td><td><?php echo $key->que_quan ?></td><td><?php echo $key->dia_chi ?></td><td><?php echo $key->sdt ?></td><td><a href="<?php echo base_url() ?>admincp/user/edituser/<?php echo $key->id ?>" title="">Sửa</a> <a href="<?php echo base_url() ?>admincp/user/deleteuser/<?php echo $key->id ?>" title="">Xóa</a></td>
		</tr>
			<?php endforeach ?>

	</tbody>
</table>