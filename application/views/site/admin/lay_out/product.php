
<?php if($message){ $this->load->view('site/admin/lay_out/messager',$this->data);}else{} ?>
<table class="table table-bordered table-hover">
<thead>
			<tr>
				<th colspan="2" class="title">Sản Phẩm</th>
			</tr>
		</thead>
	<thead>
		<tr>
			<th>Tên sản phẩm</th><th>Tên danh muc</th><th>giá</th><th>Mô tả</th><th>Số lượng</th><th>Bảo hành</th><th>Khuyến mãi</th><th>Ngày nhập</th><th>Trạng thái</th><th>Đặc biệt</th><th>ảnh</th><th>Chuc Nang</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($list_data as $key): ?>
			<tr>
				<td><?php echo $key->ten_san_pham; ?></td><td><?php echo $key->ten_danh_muc; ?></td><td><?php echo $key->gia; ?></td><td class=".pre_post"><?php echo $key->mo_ta; ?></td><td><?php echo $key->so_luong; ?></td><td><?php echo $key->bao_hanh; ?></td><td><?php echo $key->khuyen_mai; ?></td><td><?php echo $key->ngay_nhap; ?></td><td><?php echo $key->trang_thai; ?></td><td><?php echo $key->dac_biet; ?></td><td><?php echo $key->anh_san_pham; ?></td><td><a href="<?php echo base_url() ?>admincp/product/editproduct/<?php echo $key->id; ?>" title="">Sửa</a>
<a href="<?php echo base_url() ?>admincp/product/deleteproduct/<?php echo $key->id;?>" title="">Xoa</a></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<nav aria-label="...">
	<ul class="pager">
		<li><?php echo $pagination; ?></li>
	</ul>
</nav>

