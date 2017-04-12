	<div class="silebar">
		<h3> 
			<i class="fa fa-star-o fa-4x" aria-hidden="true"><img src="<?php echo base_url();?>template/img/icon/gif-new.gif" alt=""></i>CAM KẾT VÀNG </h3>
			<ul>
				<li>
					<i class="fa fa-star fa-2x fa-spin" aria-hidden="true"></i>
					<span>Sản Phẩm Chính Hãng<span class="label label-danger" style="color: #fff;">Hot</span>
				</span>
			</li>
			<li><i class="fa fa-star fa-2x fa-spin" aria-hidden="true"></i><span>Bảo Hành Chính Hãng</span></li>
			<li><i class="fa fa-star fa-2x fa-spin" aria-hidden="true"></i><span>Tư Vấn Tin Cậy</span></li>
			<li><i class="fa fa-star fa-2x fa-spin" aria-hidden="true"></i><span>Giá Cả Cạnh Tranh</span></li>
			<li><i class="fa fa-star fa-2x fa-spin" aria-hidden="true"></i><span>Mua Sắm Dễ Dàng</span></li>
			<li><i class="fa fa-star fa-2x fa-spin" aria-hidden="true"></i><span>Phục Vụ Chu Đáo</span></li>
			<li><i class="fa fa-star fa-2x fa-spin" aria-hidden="true"></i><span>Dịch Vụ Hoàn Hảo</span></li>
		</ul>
		<div class="product-hot">
			<h2><i class="fa fa-rocket fa-3x" aria-hidden="true"></i>
				Sản Phẩm Nổi Bật <img src="<?php echo base_url();?>template/img/icon/ta2032.gif" alt=""></h2>
				<ul>
					<?php foreach ($sanphamdb as $key): ?>
						<li><div class="img-product"><img class="img-thumbnail img-responsive" src="<?php echo base_url();?>template/img/product/<?php echo $key->anh_san_pham ?>" alt="" ></div><div class="info-product"><a href="<?php echo base_url()?>san-pham/<?php echo $key->link_san_pham ?>/<?php echo $key->id; ?>.html" title="<?php echo $key->ten_san_pham; ?>"><?php echo $key->ten_san_pham ?></a></div><div class="bh-product"><img src="<?php echo base_url() ?>template/img/icon/chingang.gif" alt=""><?php echo $key->bao_hanh ?></div></li>
					<?php endforeach ?>
				</ul>
			</div>
		</div> <!-- /silebar -->
		<div class="popup">
				<!-- <img src="<?php echo base_url() ?>template/img/banner/quangcao.png" alt="quảng cáo" title="quảng cáo đơn"> -->
		</div>
	</div>
