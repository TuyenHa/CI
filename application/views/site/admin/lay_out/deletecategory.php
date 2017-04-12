<form  method="post">
	<table class="table-bordered table table-condensed">
		<tbody>
			<td>Danh Mục</td><td><select name="sldanhmuc" class="form-control" >
			
				<option><?php echo $danhmuc->ten_danh_muc; ?></option>	
			
		</select><?php echo form_error('sldanhmuc'); ?></td>
		<tr><td></td><td><input type="submit" value="Sửa Danh Mục" name="ok" class="btn btn-primary"></td></tr>
	</tbody>
</table>
</form>