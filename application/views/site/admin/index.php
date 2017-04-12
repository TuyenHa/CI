<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/admin.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js
	"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="<?php echo base_url();?>template/summernote/dist/summernote.css" rel="stylesheet">

</head>
<body>
	<?php $tai_khoan=$this->session->userdata('tai_khoan');
	if($tai_khoan){
		?>
		<?php $this->load->view('site/admin/lay_out/nav'); ?>
		<div class="clearfix">
		</div>
		<section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-md-3">
						<?php $this->load->view('site/admin/lay_out/sidebar'); ?>
					</div>
					<div class="col-xs-12 col-md-9">
						<div class="content">
							<?php $this->load->view($temp); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div id="footer">
		<?php $this->load->view('site/admin/lay_out/footer'); ?>
	</div>
	<?php 
}else{
	?><div class="alert alert-danger" role="alert"><?php echo "Có vẻ như bạn đang muốn hack website của mình.Vui lòng thoát khi mình còn vui tính =)))" ?></div>
	<?php

}
?>
<!-- Summernote -->
<script src="<?php echo base_url();?>template/summernote/dist/summernote.min.js"></script>
<script>
	$('.summernote').summernote({
		height: 300
	});
</script>

</body>
</html>