<table class="table table-hover table-responsive table-bordered">
	<thead>
		<tr>
			<th class="title">Bình Luận</th>
		</tr>
		<tr>
		<th>Id bình luận</th><th>Họ tên</th><th>Số điện thoại</th><th>Nội dung</th><th>Ngày bình luận</th><th>Chức Năng</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($list_comment as $key): ?>
		<tr>
			<td><?php echo $key->id; ?></td><td><?php echo $key->ho_ten ?></td><td><?php echo $key->sdt ?></td><td><?php echo $key->noi_dung ?></td><td><?php echo $key->ngay_binh_luan ?></td><td><a href="<?php echo base_url() ?>admincp/comment/deletecomment/<?php echo $key->id ?>" title="Xóa bình luận">Xóa</a></td>
		</tr>
	<?php endforeach ?>
		
	</tbody>
</table>