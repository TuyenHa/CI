		<div class="viewproduct">
			<h2 class="titleh2"><i class="fa fa-laptop" aria-hidden="true"></i>
				Thông tin sản phẩm</h2>
				<div class="row">
					<div class="col-md-4">
						<img class="img-rounded img-responsive" src="<?php echo base_url(); ?>template/img/product/<?php echo $viewproduct->anh_san_pham; ?>"  data-zoom-image="<?php echo base_url(); ?>template/img/product/<?php echo $viewproduct->anh_san_pham; ?>" id="zoom_01" width="240" height="200" alt="">
						<img class="img-rounded" src="http://phongnet.net/wp-content/uploads/2015/01/may-tinh-de-ban.jpg" width="80" height="60" alt="">
						<img class="img-rounded" src="http://phongnet.net/wp-content/uploads/2015/01/may-tinh-de-ban.jpg" width="80" height="60" alt="">
						<img class="img-rounded" src="http://phongnet.net/wp-content/uploads/2015/01/may-tinh-de-ban.jpg" width="80" height="60" alt="">
					</div>
					<div class="col-md-8">
						<h3 class="title"><?php echo $viewproduct->ten_san_pham ?></h3>
						<p class="start"><i class="fa fa-star-half-o" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
						</p>
						<p class="pricess">Giá : <?php echo $viewproduct->gia ?> VND</p>
						<a href="<?php echo base_url() ?>gio-hang/mua-hang/<?php echo $viewproduct->id; ?>.html" title=""><button type="button" class="btn btn-info btn-buy"><i class="fa fa-cart-plus" aria-hidden="true"></i>
							Mua Hàng</button></a>	<a href="<?php echo base_url() ?>gio-hang/mua-hang/<?php echo $viewproduct->id; ?>.html" title=""><button type="button" class="btn btn-info btn-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>
							Thêm Vào Giỏ Hàng</button></a>
							<div class="khuyenmai_muahang">
								<h2><i class="fa fa-gift" aria-hidden="true"></i>
									Khuyến Mãi Khi Mua Hàng</h2>
									<p class="bg-info"><?php echo $viewproduct->mo_ta; ?>

									</p>

								</div>
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Khuyến Mãi</a></li>
									<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
									<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
									<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="home"><?php echo $viewproduct->khuyen_mai; ?></div>
									<div role="tabpanel" class="tab-pane" id="profile">...</div>
									<div role="tabpanel" class="tab-pane" id="messages">...</div>
									<div role="tabpanel" class="tab-pane" id="settings">...</div>
								</div>
								<div>

									<!-- Nav tabs -->


								</div>

								<!-- <div class="fb-comments" data-href="https://facebook.com/svtinhoc" data-numposts="5"></div> -->
							</div>
						</div>
						<?php 
						if($viewcomment){
							?>
							<div class="comment">
								<h2 class="titleh2">Bình luận <i class="fa fa-commenting-o" aria-hidden="true"></i></h2> 
								<?php foreach ($viewcomment as $key): ?>
									<div style="background-color: #F2F2F2" class="alert  alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<p><strong class="">Họ Tên :</strong><?php echo $key['ho_ten'] ?></p>
										<p><strong>Nội Dung :</strong><?php echo $key['noi_dung'] ?></p>
									</div>
								<?php endforeach ?>
							</div>
							<?php
						}else{
							?>
							<h2 class="titleh2">Bình luận <i class="fa fa-commenting-o" aria-hidden="true"></i></h2> 
							<div class="alert alert-warning alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Chú ý !</strong>Không có bình luận nào.Hãy viết đôi lời cảm nghĩ của mình về sản phẩm này ...
							</div>
							<?php
						}
						?>
						
					</div>
					<?php if($message){ $this->load->view('site/admin/lay_out/messager',$this->data);}else{} ?>
					<?php $this->load->view('site/lay_out/comment');?>
					<script type="text/javascript">
						$(document).ready(function(){
							$("#zoom_01").mouseenter(function(){
								$("#zoom_01").elevateZoom();
							});
						});
					</script>