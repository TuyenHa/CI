<form  method="post">
	<table class="table-hover table table-bordered">
		<tr>
			<th class="title">Sửa Danh Mục</th>
		</tr>
		<tbody>
			<tr>
				<td>Danh Mục Mới</td><td><input type="text" class="form-control" name="txtdanhmuc"></td>
			</tr>
			<td>Danh Mục Cũ</td><td><select name="sldanhmuc" class="form-control" >
			
			<option><?php echo $danhmuc->ten_danh_muc; ?></option>	
			
		</select><?php echo form_error('sldanhmuc'); ?></td>

	</tr>
	<tr>
	<td>Link Danh Mục</td><td><input type="text" class="form-control" name="txtlinkdanhmuc" value="<?php echo $danhmuc->link_danh_muc; ?>">Link thân thiện cho seo có dạng :abc-def-egh</td>
	</tr>
	<tr><td></td><td><input type="submit" value="Sửa Danh Mục" name="ok" class="btn btn-primary"></td></tr>
</tbody>
</table>
</form>