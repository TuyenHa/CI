<form  method="post" enctype="multipart/form-data">
	<table class="table table-responsive table-bordered table-hover">
		<thead>
			<tr>
				<th class="title">Sửa Sản Phẩm</th>
			</tr>
		</thead>
		<tbody>
			
			<tr>
				<td>Tên Sản Phẩm</td><td><input type="text" id="name"  class="form-control" value="<?php echo $info_product->ten_san_pham; ?>" name="txttensanpham"><?php echo form_error('txttensanpham'); ?></td>
			</tr>
			<tr>
				<td>Tên Danh Mục</td><td><select name="sldanhmuc" class="form-control" value="<?php echo $info_product->ten_danh_muc; ?>">
				<?php foreach ($danhmuc as $key): ?>
					<option><?php echo $key->ten_danh_muc;?></option>	
				<?php endforeach ?>	
				
			</select><?php echo form_error('sldanhmuc'); ?></td>
		</tr>
		<tr>
		<td>Link Sản Phẩm</td><td><input type="text" id="linksanpham"" class="form-control" value="<?php echo $info_product->link_san_pham; ?>" name="txtlinksanpham" ><?php echo form_error('txtlinksanpham'); ?>Link thân thiện cho seo có dạng :abc-def-egh</td>
		</tr>
		<tr>
			<td>Giá</td><td><input type="text" id="gia"  value="<?php echo $info_product->gia; ?>" class="form-control" name="txtgia"><?php echo form_error('txtgia'); ?></td>
		</tr>
		<tr>
			<td>Bảo Hành</td><td><input type="text" id="name"  class="form-control" name="txtbaohanh" value="<?php echo $info_product->bao_hanh; ?>"><?php echo form_error('txtbaohanh'); ?></td>
		</tr>
		<tr>
			<td>Số Lượng</td><td><input type="text" class="form-control" id="soluong"  name="txtsoluong" value="<?php echo $info_product->so_luong; ?>"><?php echo form_error('txtsoluong'); ?></td>
		</tr>
		<tr>
			<td>Khuyến Mại</td><td><input type="text" id="khuyenmai" class="form-control" name="txtkhuyenmai" value="<?php echo $info_product->khuyen_mai; ?>" ><?php echo form_error('txtkhuyenmai'); ?></td>
		</tr>
		<tr>
			<td>Tình Trạng</td><td><input type="checkbox" name="cbcheckbox" value="Còn Hàng"> Còn Hàng <input type="checkbox" name="cbcheckbox" value="Hết Hàng"> Hết Hàng <input type="hidden" name="cbcheckbox" value="<?php echo $info_product->tinh_trang; ?>" readonly="readonly"><?php echo form_error('cbcheckbox'); ?></td>
		</tr>
		<tr>
			<td>Trạng Thái</td><td><input type="text" class="form-control" id="trangthai"  name="txttrangthai" value="<?php echo $info_product->trang_thai; ?>"><?php echo form_error('txttrangthai'); ?></td>
		</tr>
		<tr>
			<td>Sản Phẩm Đặc Biệt</td><td><input type="radio" name="radio" value="Có"> Đặc Biệt <input type="radio" name="radio" value="Không"> Không <input type="hidden" name="radio" value="<?php echo $info_product->dac_biet; ?>" readonly="readonly"><?php echo form_error('radio'); ?></td>
		</tr>
		<tr>
			<td>Ngày Nhập</td><td><input type="type" id="ngay_nhap"  class="form-control" name="txtngaynhap" value="<?php echo $info_product->ngay_nhap; ?>"><?php echo form_error('txtngaynhap'); ?></td>
		</tr>
		<tr>
			<td>Anh Sản Phẩm</td><td><input type="file" class="form-control" name="txtanhsanpham"><input type="hidden" class="form-control" name="txtanhsanpham" value="<?php echo $info_product->anh_san_pham; ?>" readonly="readonly"/><?php echo form_error('txtanhsanpham'); ?></td>
		</tr>
		<tr>
			<td>Mô tả</td><td><textarea name="txtmota" class="form-control summernote"><?php echo $info_product->mo_ta; ?></textarea><?php echo form_error('txtanhsanpham'); ?></td>
		</tr>
		<tr>
			<td class="success"></td><td class="success"><input type="Submit" class="btn btn-md btn-primary" value="Sửa Sản Phẩm" name="ok">  <input type="Submit" class="btn btn-md btn-primary" value="Nhập Lại"></td>
		</tr>
	</tbody>

</table>
<div id="result">
</div>
</form>