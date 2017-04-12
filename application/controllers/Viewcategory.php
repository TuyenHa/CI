<?php 
class Viewcategory extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function index(){
		$id=$this->uri->segment('3');
		$id=intval($id);
		$where=array('id_danh_muc'=>$id);
		$field='id,ten_san_pham,anh_san_pham,gia,bao_hanh,link_san_pham';
		$product_category=$this->admin_model->get_array($where,$field);
		$this->data['product_category']=$product_category;
		$this->data['temp']='site/lay_out/viewcategory';
		$this->load->view('site/index',$this->data);
	}
}
?>
