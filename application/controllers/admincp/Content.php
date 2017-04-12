<?php 
class Content extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}
	function index(){
		$this->data['temp']='site/admin/lay_out/content';
		$this->load->view('site/admin/index',$this->data);
	}
}

?>