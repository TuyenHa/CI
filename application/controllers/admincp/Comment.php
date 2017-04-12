<?php 
class Comment extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Comment_model');
	}
	public function index(){
		$list_comment=$this->Comment_model->getList();
		$this->data['list_comment']=$list_comment;
		$this->data['temp']='site/admin/lay_out/comment';
		$this->load->view('site/admin/index',$this->data);
	}
	public function deletecomment(){
		$id=$this->uri->segment('4');
		$id=intval($id);
		if($this->Comment_model->delete($id)){
			redirect(base_url().'admincp/comment/index');
		}
	}
}


 ?>