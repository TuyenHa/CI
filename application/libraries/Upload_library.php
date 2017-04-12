<?php 
class Upload_library{
	var $CI = ''; 
	function __construct()
	{
		$this->CI = & get_instance();
	}
	function config($upload_path=''){
		$config=array();
		$config['upload_path']=$upload_path;
		$config['allowed_types']='gif|jpg|png';
		return $config;
	}
	function upload($upload_path='',$file_name=''){
		$config=$this->config($upload_path);
		$this->CI->load->library('upload',$config);
		if($this->CI->upload->do_upload($file_name)){
			$data=$this->CI->upload->data();
		}else{
			$data=$this->CI->upload->display_errors();
		}
		return $data;
	}
}

?>