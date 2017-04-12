<nav class="navbar navbar-fixed-top navbar-default login">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand logo-hd" href="<?php echo base_url(); ?>"><img src="<?php echo base_url() ?>template/img/logo/hd-shop.png" target="_blank"></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav nav-top-hover">
				<li class="active2"><a href="<?php echo base_url(); ?>" target="_blank">Xem Trang Chủ <span class="sr-only">(current)</span></a></li>
				<li><a href="">Facebook</a></li>
			</ul>
			<form class="navbar-form navbar-left">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Nhập thông tin tìm kiếm..." size="50">
				</div>
				<button type="submit" class="btn btn-danger">Search</button>
			</form>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				<p class="personal" data-toggle="dropdown">Xin Chào : <span class="glyphicon glyphicon-user
					"><b style="color:red;"> Admin</b></span><span class="caret"></span></p>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Thông tin</a></li>
						<li><a href="#"><i class="fa fa-cog fa-spin" aria-hidden="true"></i> Đổi mật khẩu</a></li>
						<div class="divider"></div>
						<li><a href="<?php echo base_url()?>admincp/logout.html"><i class="fa fa-times" aria-hidden="true"></i> Thoát</a></li>
					</ul>
				</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
