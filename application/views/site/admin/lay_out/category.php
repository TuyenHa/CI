<?php if($message){$this->load->view('site/admin/lay_out/messager',$this->data);}else{} ?>
<table class="table-responsive table table-bordered">
	<thead>
		<tr>
			<th>Id Danh Mục</th><th>Tên Danh Mục</th><th>Link Danh Mục</th><th>Chức Năng</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($danhmuc as $key): ?>
			<tr>
				<td><?php echo $key->id; ?></td><td><?php echo $key->ten_danh_muc; ?></td><td><?php echo $key->link_danh_muc; ?></td><td><a href="<?php echo base_url()?>admincp/category/editcategory/<?php echo $key->id; ?>" title="">Sửa</a> <a href="<?php echo base_url()?>admincp/category/deletecategory/<?php echo $key->id; ?>" title="">Xóa</a></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<!-- <nav aria-label="...">
	<ul class="pager">
		<li><?php echo $pagination; ?></li>
	</ul>
</nav> -->