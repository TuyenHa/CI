	<?php 
if($product_category){
?>
<div class="content">
		<div class="box-title">
			<h2>Danh mục</h2>
			<?php foreach ($product_category as $key): ?>
				<div class="box-product">
				<p><a href="<?php echo base_url()?>san-pham/<?php echo $key['link_san_pham'] ?>/<?php echo $key['id']; ?>.html" title="<?php echo $key['ten_san_pham']; ?>"><?php echo $key['ten_san_pham']; ?></a></p>
				<a href="<?php echo base_url()?>san-pham/<?php echo $key['link_san_pham'] ?>/<?php echo $key['id']; ?>.html" title=""><img src="<?php echo base_url();?>template/img/product/<?php echo $key['anh_san_pham'] ?>" title="<?php echo $key['ten_san_pham']; ?>" width="200px" height="180px"></a>
				<p>Giá :<?php echo $key['gia'] ?> VNĐ</p>
				<p><span><?php echo $key['bao_hanh'] ?></span></p>
				<div class="btn_purchase">
					<i class="fa fa-cart-plus" aria-hidden="true"></i><a href="<?php echo base_url() ?>cart/addcart/<?php echo $key['id'];  ?>" title="Mua Hàng">Mua Hàng</a>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div><!-- /content -->
<?php
}else{
?>
<div class="alert alert-success" role="alert">Không có sản phẩm nào trong danh mục này</div>
<?php
}

	 ?>
