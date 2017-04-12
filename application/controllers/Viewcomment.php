<?php 
class Viewcomment extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('comment_model');
	}
	public function view(){
		$id=$this->uri->segment(3);
		$id=intval($id);
		$where=array('id'=>$id);
		$field='id,ten_san_pham,gia,mo_ta,so_luong,bao_hanh,khuyen_mai,trang_thai,anh_san_pham';
		$viewproduct=$this->admin_model->get_info_rule($where,$field);
		$wheredk=array('id_san_pham'=>$id);
		$field1='ho_ten,noi_dung,ngay_binh_luan';
		$viewcomment=$this->comment_model->get_array($wheredk,$field1);
		$this->data['viewcomment']=$viewcomment;
		$this->data['viewproduct']=$viewproduct;
		$this->data['temp']='site/lay_out/viewproduct';
		$this->load->view('site/index',$this->data);
	}
}

 ?>