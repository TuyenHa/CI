<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Model extends CI_Model{
	
	var $table="";
	var $key="id";
	
	function insert($data=array()){
		if($this->db->insert($this->table,$data)){
			return true;
		}else{
			return false;
		}
	}
	//update theo id
	function update($id, $data)
	{
		if (!$id)
		{
			return FALSE;
		}
		
		$where = array();
		$where[$this->key] = $id;
		$this->update_rule($where, $data);

		return TRUE;
	}
	
	/**
	 * Cap nhat row tu dieu kien
	 * $where : dieu kien
	 * $data : mang du lieu can cap nhat
	 */
	function update_rule($where, $data)
	{
		if (!$where)
		{
			return FALSE;
		}
		
		$this->db->where($where);
		$this->db->update($this->table, $data);

		return TRUE;
	}
	//xoa row tu dieu kien
	function delete_rule($where){
		if(!$where){
			return false;
		}
		$this->db->where($where);
		$this->db->delete($this->table);
	}
	//xoa tu id
	function delete($id){
		if(!$id){
			return false;
		}
		if(is_numeric($id)){
			$where=array();
			$where[$this->key]=$id;
		}else{
			$where=$this->key."IN(".$id.")";
		}
		$this->delete_rule($where);
		return true;
	}
	function get_info($id, $field = '')
	{
		if (!$id)
		{
			return FALSE;
		}

		$where = array();
		$where[$this->key] = $id;

		return $this->get_info_rule($where, $field);
	}
	//lay du lieu ra theo dieu kien where
	//$field cot muon lay ra
	function get_info_rule($where = array(), $field= '')
	{
		if($field)
		{
			$this->db->select($field);
		}
		$this->db->where($where);
		$query = $this->db->get($this->table);
		if ($query->num_rows())
		{
			return $query->row();
		}
		
		return FALSE;
	}
	function get_array($where = array(), $field= '')
	{
		if($field)
		{
			$this->db->select($field);
		}
		$this->db->where($where);
		$query = $this->db->get($this->table);
		if ($query->num_rows())
		{
			return $query->result_array();
		}
		
		return FALSE;
	}
	//lay ra dữ liệu bảng
	function getList(){
		$query=$this->db->get($this->table);
		return $query->result();
	}
	
	function login($field='',$where=array()){
		$this->db->select($field);
		$this->db->where($where);
		$query=$this->db->get($this->table);
		if($query->num_rows()){
			return $query->row();
		}
	}
	//lấy ra dữ liệu theo câu lệnh like
	function getListLike($where=array(),$field=''){
		$this->db->select($field);		
		$this->db->like($where);
		$query=$this->db->get($this->table);
		return $query->result();
	}
	//đếm tổng số bản ghi trong 1 bảng
	function coutAll(){
		return $this->db->count_all($this->table);
	}
	function getLimit($page,$uri){
		$this->db->limit($page,$uri);
		$query=$this->db->get($this->table);
		return $query->result();
	}
	function get_list($input = array())
	{
	    //xu ly ca du lieu dau vao
		$this->get_list_set_input($input);
		
		//thuc hien truy van du lieu
		$query = $this->db->get($this->table);
		//echo $this->db->last_query();
		return $query->result();
	}
	
	/**
	 * Gan cac thuoc tinh trong input khi lay danh sach
	 * $input : mang du lieu dau vao
	 */
	
	protected function get_list_set_input($input = array())
	{
		
		// Thêm điều kiện cho câu truy vấn truyền qua biến $input['where'] 
		//(vi du: $input['where'] = array('email' => 'hocphp@gmail.com'))
		if ((isset($input['where'])) && $input['where'])
		{
			$this->db->where($input['where']);
		}
		
		//tim kiem like
		// $input['like'] = array('name' => 'abc');
	    if ((isset($input['like'])) && $input['like'])
		{
			$this->db->like($input['like'][0], $input['like'][1]); 
		}
		
		// Thêm sắp xếp dữ liệu thông qua biến $input['order'] 
		//(ví dụ $input['order'] = array('id','DESC'))
		if (isset($input['order'][0]) && isset($input['order'][1]))
		{
			$this->db->order_by($input['order'][0], $input['order'][1]);
		}
		
		
		// Thêm điều kiện limit cho câu truy vấn thông qua biến $input['limit'] 
		//(ví dụ $input['limit'] = array('10' ,'0')) 
		if (isset($input['limit'][0]) && isset($input['limit'][1]))
		{
			$this->db->limit($input['limit'][0], $input['limit'][1]);
		}
		
	}
	function check_exists($where = array())
    {
	    $this->db->where($where);
	    //thuc hien cau truy van lay du lieu
		$query = $this->db->get($this->table);
		
		if($query->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}

?>