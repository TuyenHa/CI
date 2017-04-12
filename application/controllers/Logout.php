<?php 
class Logout extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}
	function index(){
		$getusername=$this->session->userdata('tai_khoan');
		$this->data['getusername']=$getusername;
		if($getusername){
			$this->session->unset_userdata('tai_khoan');
			redirect(base_url());
		}
	}
}

?>