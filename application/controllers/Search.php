<?php 
class Search extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function index(){
		if($this->input->post()){
			$timkiem=$this->input->post('txttimkiem');
			$where=array('ten_san_pham'=>$timkiem);
			$field='id,ten_san_pham,anh_san_pham,gia,bao_hanh,link_san_pham';
			if($this->admin_model->getListLike($where,$field)){
				$search_product=$this->admin_model->getListLike($where,$field);
			}else{
				echo 'không tồn tại';
			}
		}
		$this->data['search_product']=$search_product;
		$this->data['temp']='site/lay_out/result_search';
		$this->load->view('site/index',$this->data);
	}
}

?>