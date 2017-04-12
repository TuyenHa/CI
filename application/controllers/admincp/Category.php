<?php 
class Category extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('category_model');
		$this->load->library('pagination');
		$this->load->model('admin_model');
	}
	function index(){
		//phan trang
		/*$this->load->library('pagination_library');
		$url=base_url().'admincp/category/index';
		$total=$this->category_model->coutAll();
		$page='4';
		$uri='3';
		$pagination=$this->pagination_library->pagination($url,$total,$page,$uri);*/
		$danhmuc=$this->category_model->getList();
		$message=$this->session->flashdata('message');
		$this->data['danhmuc']=$danhmuc;
		//$this->data['pagination']=$pagination;
		$this->data['message']=$message;
		$this->data['temp']='site/admin/lay_out/category';
		$this->load->view('site/admin/index',$this->data);
	}
	function addcategory(){
		if($this->input->post()){
			$this->form_validation->set_rules('txtdanhmuc','Tên Danh Mục','required|min_length[4]');
			$this->form_validation->set_rules('txtlinkdanhmuc','Link Danh Mục','required|min_length[4]');
			if($this->form_validation->run()){
				$danhmuc=$this->input->post('txtdanhmuc');
				$linkdanhmuc=$this->input->post('txtlinkdanhmuc');
				
				$data=array('ten_danh_muc'=>$danhmuc,'link_danh_muc'=>$linkdanhmuc);
				if($this->category_model->insert($data)){
					$this->session->set_flashdata('message','Thêm thành công');
				}else{
					$this->session->set_flashdata('message','Thêm không thành công');
				}
			}
			redirect(base_url().'admincp/category/index');
		}
		
		$this->data['temp']='site/admin/lay_out/addcategory';
		$this->load->view('site/admin/index',$this->data);
	}
	function editcategory(){
		$id=$this->uri->segment(4);
		$id=intval($id);
		$where=array('id'=>$id);
		$field='ten_danh_muc,link_danh_muc';
		$danhmuc=$this->category_model->get_info_rule($where,$field);
		print_r($danhmuc);
		if($this->input->post()){
			$this->form_validation->set_rules('txtdanhmuc','Danh Mục Mới','required|min_length[4]');
			$this->form_validation->set_rules('txtlinkdanhmuc','Link Danh Mục','required|min_length[4]');

			$this->form_validation->set_rules('sldanhmuc','Danh Mục Cũ','required');
			if($this->form_validation->run()){
				$danhmucmoi=$this->input->post('txtdanhmuc');
				$danhmuccu=$this->input->post('sldanhmuc');	
				$linkdanhmuc=$this->input->post('txtlinkdanhmuc');
				$data=array('ten_danh_muc'=>$danhmucmoi,'link_danh_muc'=>$linkdanhmuc);
				$where=$id;
				$abc=$this->category_model->update($where,$data);
				print_r($abc);
				if($this->category_model->update($where,$data)){
					$this->session->set_flashdata('message','Sửa thành công');
				}else{
					$this->session->set_flashdata('message','Sửa không thành công');
				}
			}
			redirect(base_url().'admincp/category/index');
		}
		$this->data['danhmuc']=$danhmuc;
		$this->data['temp']='site/admin/lay_out/editcategory';
		$this->load->view('site/admin/index',$this->data);
	}
	function deletecategory(){
		$id=$this->uri->segment(4);
		//$id=intval($id);
		if($this->category_model->delete($id)){
			$this->session->set_flashdata('message','Xóa thành công');
		}else{
			$this->session->set_flashdata('message','Xóa không thành công');
		}
		redirect(base_url().'admincp/category/index');
	}
}

?>