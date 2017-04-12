							<div class="col-md-12">
								<div class="comment">
									<h2><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
										Viết bình luận</span></h2>
										<form method="post" action="<?php echo base_url()?>san-pham/<?php echo $viewproduct->link_san_pham ?>/<?php echo $viewproduct->id; ?>.html">
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputEmail1">Họ tên</label>
											<input type="text" required="" class="form-control" id="hoten" name="txthoten"  placeholder="Vui lòng nhập hộ tên...">
										</div>
										<?php echo form_error('txthoten'); ?>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="exampleInputPassword1">Nội Dung</label>
											<textarea class="form-control summernote" name="txtnoidung" placeholder="Nhập nội dung bình luận...."></textarea>
										</div>
										<input type="submit" class="btn btn-warning" value="Gửi bình luận">
									</div>
								</form>
							</div>
						</div>

