<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/product.css">
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/style-slide.css" />
	<!-- End WOWSlider.com HEAD section -->
	<script type="text/javascript" src="<?php echo base_url();?>template/js/wowslider.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>template/js/script.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>template/js/jquery-3.1.1.min.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>template/js/jquery.elevatezoom.js" ></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>template/css/bootstrap.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="<?php echo base_url();?>template/css/bootstrap-theme.css" >
	<!-- Latest compiled and minified JavaScript -->
	<script src="<?php echo base_url();?>template/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link href="<?php echo base_url();?>template/summernote/dist/summernote.css" rel="stylesheet">
</head>
<body>
	<div id="wapper">
		<div id="header">
			<?php $this->load->view("site/lay_out/head"); ?>
		</div>
		<div id="list-category">
			<?php $this->load->view("site/lay_out/list"); ?>
		</div>
		<div id="main">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div id="result">
							<?php $this->load->view($temp); ?>
						</div>
					</div>
					<div class="col-md-3">
						<?php $this->load->view('site/lay_out/sidebar'); ?>
					</div>
				</div>
			</div>
		</div><!-- /main -->
		<div id="footer">
			<?php $this->load->view("site/lay_out/footer"); ?>
			<a class="btn-top" href="javascript:void(0);" title="Top" style="display: inline;"></a>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.box-product').hover(function(){
				$(this).css({"box-shadow": '0px 0px 30px black'});
			},function(){
				$(this).css({"box-shadow": '0px 0px 0px 0px #DDDDDD'});
			});
		});
		$(document).ready(function(){
			$('.img-product img').hover(function(){
				$(this).css({"box-shadow": '0px 0px 30px black'});
			},function(){
				$(this).css({"box-shadow": '0px 0px 0px 0px #DDDDDD'});
			});
		});
		$(document).ready(function(){
			$('.btn-top').hide();
			if($('.btn-top').length>0){
				$(window).scroll(function(){
					var e=$(window).scrollTop();
					if(e>1500){
						$('.btn-top').show();
					}else{
						$('.btn-top').hide();
					}
				});
				$('.btn-top').click(function(){
					$('body,html').animate({
						scrollTop:0
					})
				})
			}
		});
		$(document).ready(function(){
			if($('.popup').length>0){
				$(window).scroll(function(){
					var e=$(window).scrollTop();
					if(e>2000){
						$('.popup').css({'position':'fixed','top':'0'});
					}else{
						$('.popup').css({'position':'relative'});
					}
				});
			}
		});
	</script>
	<!-- Summernote -->
	<script src="<?php echo base_url();?>template/summernote/dist/summernote.min.js"></script>
	<script>
		$('.summernote').summernote({
			height: 300 
		});
	</script>
</body>
</html>