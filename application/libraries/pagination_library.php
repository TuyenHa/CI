<?php 
class Pagination_library{
	var $CI = ''; 
	function __construct()
	{
		$this->CI = & get_instance();
	}
	public function pagination($url,$total_row,$page,$uri){
		
		$this->CI->pagination_library->config($url,$total_row,$page,$uri);
		//$list_data=$this->CI->admin_model->getLimit($config['per_page'],$segment);
		$this->CI->pagination->initialize($config);
		$pagination=$this->CI->pagination->create_links();
		return $pagination;
	}
	public function config($url,$total_row,$page,$uri){
		$config=array();
		$config['base_url']=$url;
		$config['total_rows']=$total_row;
		$config['per_page']=$page;
		$segment=$this->CI->uri->segment($uri);
		$segment=intval($segment);
		$input=array();
		
		$input['limit']=array($config['per_page'],$segment);
		$query=$this->CI->admin_model->get_list($input);
		return $query;
	}
}
?>