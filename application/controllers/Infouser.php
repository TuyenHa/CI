<?php 
/**
* 
*/
class Infouser extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index()
	{
		$id=$this->uri->segment(2);
		$id=intval($id);
		$where=array('id'=>$id);
		$field='tai_khoan,email,gioi_tinh,ngay_sinh,que_quan,dia_chi,sdt';
		$infouser=$this->User_model->get_info_rule($where,$field);
		$this->data['infouser']=$infouser;
		$this->data['temp']='site/lay_out/infouser';
		$this->load->view('site/index',$this->data);
	}
}

?>