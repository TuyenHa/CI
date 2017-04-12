<form  method="post" enctype="multipart/form-data">
	<table class="table table-responsive table-bordered table-hover">
		<thead>
			<tr>
				<th class="title">Thêm Sản Phẩm</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tên Sản Phẩm</td><td><input type="text" id="name"  class="form-control" name="txttensanpham" ><?php echo form_error('txttensanpham'); ?></td>
			</tr>
			<tr>
				<td>Tên Danh Mục</td><td><select name="sldanhmuc" value ="" class="form-control" >
				<?php foreach ($danhmuc as $key): ?>
						<option><?php echo $key->ten_danh_muc;?></option>	
					<?php endforeach ?>	
				
							</select><?php echo form_error('sldanhmuc'); ?></td>
			
					</tr>
					<tr>
						<td>Link Sản Phẩm</td><td><input type="text" id="linksanpham"" class="form-control" name="txtlinksanpham" ><?php echo form_error('txtlinksanpham'); ?>Link thân thiện cho seo có dạng :abc-def-egh</td>
					</tr>
					<!-- <tr><td>Tên Danh Mục</td><td><input type="text" class="form-control" name="sldanhmuc"><?php echo form_error('sldanhmuc'); ?></td></tr>
					<tr> -->
						<td>Giá</td><td><input type="text" class="form-control" id="gia" name="txtgia" ><?php echo form_error('txtgia'); ?></td>
					</tr>
					<tr>
						<td>Bảo Hành</td><td><input type="text" id="baohanh"" class="form-control" name="txtbaohanh" ><?php echo form_error('txtbaohanh'); ?></td>
					</tr>
					<tr>
						<td>Số Lượng</td><td><input type="text" id="soluong"  class="form-control" name="txtsoluong" ><?php echo form_error('txtsoluong'); ?></td>
					</tr>

					<tr>
						<td>Trạng Thái</td><td><input type="text" class="form-control" id="trangthai"  name="txttrangthai" value=""><?php echo form_error('txttrangthai'); ?></td>
					</tr>
					<tr>
						<td>Sản Phẩm Đặc Biệt</td><td><input type="radio" name="radio" value="Có"> Đặc Biệt <input type="radio" name="radio" value="Không"> Không <?php echo form_error('radio'); ?></td>
					</tr>
					<tr>
						<td>Khuyến Mãi</td><td><input type="text"  class="form-control" id="khuyenmai"  name="txtkhuyenmai" value="" ><?php echo form_error('txtkhuyenmai'); ?></td>
					</tr>
					<tr>
						<td>Ngày Nhập</td><td><input type="date" id="date" class="form-control" name="txtngaynhap" value=""><?php echo form_error('txtngaynhap'); ?></td>
					</tr>
					<tr>
						<td>Anh Sản Phẩm</td><td><input type="file" class="form-control" name="txtanhsanpham"><?php echo form_error('txtanhsanpham'); ?></td>
					</tr>
					<tr>
						<td>Mô tả</td><td><textarea name="txtmota" class="form-control summernote" ></textarea><?php echo form_error('txtmota'); ?></td>
					</tr>
					<tr>
						<td class="success"></td><td class="success"><input type="Submit"  class="btn btn-md btn-primary" value="Thêm Sản Phẩm" name="ok">  <input type="Submit" class="btn btn-md btn-primary" value="Nhập Lại"></td>
					</tr>
				</tbody>
			</table>
		</form>