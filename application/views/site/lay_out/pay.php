<?php 
if($pay){
	?>
	<div class="pay">
		<h2 class="titleh2" style="color: red;font-size: 22px; border-bottom: 1px solid red;"><i class="fa fa-desktop" aria-hidden="true"></i>
			Thanh toán hóa đơn</h2>
			<form method="post">
				<table class="table-bordered table table-hover table-responsive">
					<thead>
						<tr>
							<th>Tên sản phẩm</th><th>Giá</th><th>Số lượng</th><th>Thành tiền</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($pay as $key): ?>
							<tr>
								<td><?php echo $key['name'] ?></td><td><?php echo $key['price'] ?> USD</td><td><?php echo $key['qty']; ?></td><td><?php echo $key['subtotal']; ?> USD</td>
							</tr>
						</tbody>
					<?php endforeach ?>
				</table>
				<?php $this->load->view('site/lay_out/order'); ?>
			</form>
		</div>
		<?php
	}else{
		?>
		<div class="alert alert-success" role="alert">Không có sản phẩm nào.Vui lòng chọn sản phẩm</div>
		<?php
	}
	?>