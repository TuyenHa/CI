<div id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="<?php echo base_url();?>" title=""><img src="<?php echo base_url();?>template/img/logo/3.png" class="img-responsive" alt=""></a>
			</div><!-- /end logo -->
			<div class="col-md-6">
				<?php 
				$this->load->view('site/lay_out/search');
				?>

			</div><!-- /end search -->
			<div class="col-md-3">
				<div class="cart-suicide">
					<div class="cart">
						<i class="fa fa-cart-plus fa-1x" aria-hidden="true"></i><span class="badge" style="color: #fff;background: red"><?php $this->load->view('site/lay_out/total'); ?></span><a href="<?php echo base_url() ?>gio-hang.html" title="Giỏ Hàng">Giỏ Hàng</a>
					</div>
					<div class="suicide">
						<div class="info-phone">
							<i class="fa fa-phone fa-2x" aria-hidden="true"></i><span>Tư vấn free</span>
							<p>1800 6969</p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /row -->
	</div>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="" class="navbar-brand">DANH MỤC SẢN PHẨM</a>
			</div>
			<div class="navbar-collapse collapse" id="menu">
				<ul class="nav navbar-nav" >
					<li><a href="">Trang chủ</a></li>
					<li><a href="">Giới thiệu</a></li>
					<li><a href="">Tin tức</a></li>
					<li><a href="">Thương hiệu</a></li>
					<li><a href="">Liên hệ</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php 
					if($getusername){
						?>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Xin Chào : <?php echo $getusername; ?>
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<?php foreach ($iduser as $key => $value): ?>
										<li><a href="<?php echo base_url()?>thong-tin-tai-khoan/<?php echo $value['id']; ?>.html">Thông tin</a></li>
										<li><a href="<?php echo base_url()?>doi-mat-khau/<?php echo $value['id']; ?>.html">Đổi mật khẩu</a></li>
									<?php endforeach ?>
									<div class="divider"></div>
									<li><a href="<?php base_url() ?>dang-xuat.html">Thoát</a></li>
								</ul>
							</li>
						
							<?php
						}else{
							?>
							<li><a href="<?php echo base_url() ?>dang-nhap.html" title=""><span class="glyphicon glyphicon-user"></span> Đăng Nhập</a></li>
							<li><a href="<?php echo base_url() ?>dang-ki-tai-khoan.html" title=""><span class="glyphicon glyphicon-log-in"></span> Đăng Kí</a></li>
							<?php
						}
						?>

					</ul>
				</div>

			</nav><!-- /nav -->

		</div>
	</div>