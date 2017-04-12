	<div class="content">
		<div class="box-title">
			<h2>Sản Phẩm Mới</h2>
			<?php foreach ($list_data as $key): ?>
				<div class="box-product">
					<p><a href="<?php echo base_url()?>san-pham/<?php echo $key->id; ?>.html" title="<?php echo $key->ten_san_pham; ?>"><?php echo $key->ten_san_pham; ?></a></p>
					<a href="<?php echo base_url()?>san-pham/<?php echo $key->id; ?>.html" title=""><img src="<?php echo base_url();?>template/img/product/<?php echo $key->anh_san_pham ?>" title="<?php echo $key->ten_san_pham; ?>" width="200px" height="180px"></a>
					<p>Giá :<?php echo $key->gia ?> VNĐ</p>
					<p><span><?php echo $key->bao_hanh ?></span></p>
					<div class="btn_purchase">
						<i class="fa fa-cart-plus" aria-hidden="true"></i><a href="<?php echo base_url() ?>gio-hang/mua-hang/<?php echo $key->id; ?>.html" title="Mua Hàng">Mua Hàng</a>
					</div>
				</div>
			<?php endforeach ?>
		</div>
		<nav aria-label="...">
				<ul class="pager">
					<li><?php echo $pagination; ?></li>
				</ul>
		</nav>
	</div><!-- /content -->
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$(".pager li a").click(function(){
				var url = $(this).attr("href");
				$.ajax({
					type: "POST",
					url: url,
					dataType: "text",
					async: true,
					success: function(kq){
						$("#result").html(kq);
					}
				})
				return false;
			});		
		})
	</script> -->