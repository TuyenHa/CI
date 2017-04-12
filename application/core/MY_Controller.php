<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller{
	public $data=array();
	public function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('User_model');
		$controller=$this->uri->segment(2);
		switch ($controller) {
			case 'admincp':
			
			break;

			default:
			//load danh muc san pham
			$this->load->model('category_model');
			$danhmuc=$this->category_model->getList();
			$this->data['danhmuc']=$danhmuc;
            //view prodcut
			//load san pham
			$this->load->library('pagination');
			$this->load->model('admin_model');
			$config=array();
			$config['base_url']=base_url().'home/index';
			$config['total_rows']=$this->admin_model->coutAll();
			$config['per_page']=21;
			$segment=$this->uri->segment(3);
			$segment=intval($segment);
			$input=array();
			$input['limit']=array($config['per_page'],$segment);
			$list_data=$this->admin_model->get_list($input);
			$this->pagination->initialize($config);
			$pagination=$this->pagination->create_links();
			$this->data['list_data']=$list_data;
			$this->data['pagination']=$pagination;
			//lay ra san pham loi bat
			$field='id,ten_san_pham,anh_san_pham,bao_hanh,link_san_pham';
			$where='co';
			$where=str_replace(" ","%",$where);
			$like=array("dac_biet"=>$where);
			$sanphamdacbiet=$this->admin_model->getListLike($like,$field);
			$this->data['sanphamdb']=$sanphamdacbiet;
			//số sản phẩm và session hiển thị trên head
			$total = $this->cart->total_items();
			$this->data['total']=$total;
			$getusername=$this->session->userdata('tai_khoan');
			$this->data['getusername']=$getusername;
			$where=array('tai_khoan'=>$this->session->userdata('tai_khoan'));
			$field='id';
			$iduser=$this->User_model->get_array($where,$field);
			$this->data['iduser']=$iduser;
			break;
		}
	}
	
}

?>