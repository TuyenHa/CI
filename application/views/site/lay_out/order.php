<?php if($message){$this->load->view('site/admin/lay_out/messager');}else{} ?>
<form method="post"> 
	<div class="jumbotron">
		<h3 style="color: #00FF00"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Thông tin khách hàng</h3>
		<div class="form-group">
			<label for="exampleInputEmail1">Họ tên</label>
			<input type="text" class="form-control" name="txthoten"  placeholder="Nhập họ tên (bắt buộc)">
			<?php echo form_error('txthoten'); ?>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Email</label>
			<input type="email" class="form-control" name="txtemail"  placeholder="Nhập email (bắt buộc)">
			<?php echo form_error('txtemail'); ?>
		</div>
		<div class="form-group">
			<label for="exampleInputFile">Số điện thoại</label>
			<input type="text" class="form-control" name="txtsdt"  placeholder="Nhập số điện thoại (bắt buộc)">
			<?php echo form_error('txtsdt'); ?>
		</div>
		<div class="form-group">
			<label for="exampleInputFile">Hình thức thanh toán</label>
			<input type="radio" name="txthinhthuc"   placeholder="Nhập họ tên (bắt buộc)" value="Giao tận nơi">Giao tận nơi  | <input type="radio" name="txthinhthuc"  placeholder="Nhập họ tên (bắt buộc)" value="Nhận ở cửa hàng">Nhận ở cửa hàng
			<?php echo form_error('txthinhthuc'); ?>
		</div>
		
		<button type="submit" class="btn btn-info btn-md">Gửi đơn hàng</button>
	</div>
</form>
