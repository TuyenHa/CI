	<?php 
	if($showcart){
		?>
		<div class="cart">
			<h2 class="titleh2" style="color: red;font-size: 22px; border-bottom: 1px solid red;"><i class="fa fa-desktop" aria-hidden="true"></i>
				Giỏ hàng của bạn</h2>
				<form method="post">
					<table class="table table-bordered table-hover table-responsive">
						<thead>
							<tr class="success">
								<th>Tên sản phẩm</th><th>Hình</th><th>Giá</th><th>Số lượng</th><th>Chức năng</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($showcart as $key): ?>
								<tr>
									<td><?php echo $key['name']; ?></td><td><img class="img-responsive img-thumbnail" width="80" height="40" src="<?php echo base_url()?>/template/img/product/<?php echo $key['image']; ?>" alt=""></td><td><?php echo $key['price']; ?> USD</td><td><input type="number" class="form-control"   value="<?php echo $key['qty']; ?>" name="txtsoluong"></td><td><a href="<?php echo base_url() ?>gio-hang/xoa-hang/<?php echo $key['id']; ?>.html" title=""><button type="button" class="btn btn-info btn-xs">Xóa Hàng</button></a> | <a href="<?php echo base_url() ?>cart/update/<?php echo $key['id'] ?>" title="Cập nhật giỏ hàng"><input type="submit" class="btn btn-info btn-xs" name="ok" value="Cập Nhật"></a></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
					<p><a href="<?php echo base_url() ?>gio-hang/xoa-het.html" title="Xóa giỏ hàng"><button type="button" class="btn btn-danger btn-sm">Xóa Giỏ Hàng</button></a> | <a href="<?php echo base_url() ?>thanh-toan.html" title="Dừng và thanh toán"><button type="button" class="btn btn-success btn-sm">Dừng và thanh toán</button></a></p>
					<p>Tổng số sản phẩm là : <?php echo $total; ?> sản phẩm</p>
					<p>Tổng tiền là : <?php echo $total_pri; ?> USD</p>
				</form>
			</div>
			<?php
		}else{
			?>
			<div class="alert alert-success" role="alert">Không có sản phẩm nào.Vui lòng chọn sản phẩm</div>
			<?php
		}
		?>
