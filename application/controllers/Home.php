<?php 
class Home extends MY_Controller{
	public $data=array();
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('comment_model');
	}
	function index(){

		$this->data['temp']='site/lay_out/content';
		$this->load->view('site/index',$this->data);
	}
	function view(){
		$id=$this->uri->segment(2);
		$id=intval($id);
		$where=array('id'=>$id);
		$field='id,ten_san_pham,gia,mo_ta,so_luong,bao_hanh,khuyen_mai,trang_thai,anh_san_pham,link_san_pham';
		$viewproduct=$this->admin_model->get_info_rule($where,$field);
		$wheredk=array('id_san_pham'=>$id);
		$field1='ho_ten,noi_dung,ngay_binh_luan';
		$viewcomment=$this->comment_model->get_array($wheredk,$field1);
		if($this->input->post()){
			$this->form_validation->set_rules('txthoten','Họ Tên','required|min_length[4]');
			if($this->form_validation->run()){
				$hoten=$this->input->post('txthoten');
				$noidung=$this->input->post('txtnoidung');
				$datestring = " %Y-%m-%d";
				$time = time();
				$ngaybl=mdate($datestring, $time);
				echo $ngaybl;
				$data=array('ho_ten'=>$hoten,
					'id_san_pham'=>$id,
					'noi_dung'=>$noidung,
					'ngay_binh_luan'=>$ngaybl,
					);
				if($this->comment_model->insert($data)){
					$this->session->set_flashdata('message','Gửi bình luận thành công');
				}else{
					$this->session->set_flashdata('message','Gửi bình luận không thành công');
				}
			}
		}
		$message=$this->session->flashdata('message');
		$this->data['message']=$message;
		$this->data['viewcomment']=$viewcomment;
		$this->data['viewproduct']=$viewproduct;
		$this->data['temp']='site/lay_out/viewproduct';
		$this->load->view('site/index',$this->data);
	}
	function addcomment(){
		$id=$this->uri->segment(3);
		$id=intval($id);
		if($this->input->post()){
			$this->form_validation->set_rules('txthoten','Họ Tên','required|min_length[4]');
			if($this->form_validation->run()){
				$hoten=$this->input->post('txthoten');
				$noidung=$this->input->post('txtnoidung');
				$datestring = " %Y  %m  %d";
				$time = time();
				$ngaybl=mdate($datestring, $time);
				$data=array('ho_ten'=>$hoten,
					'id_san_pham'=>$id,
					'noi_dung'=>$noidung,
					'ngay_binh_luan'=>$ngaybl,
					);
				print_r($data);
				if($this->comment_model->insert($data)){
					$this->session->set_flashdata('message','Gửi bình luận thành công');
				}else{
					$this->session->set_flashdata('message','Gửi bình luận không thành công');
				}
			}
		}
		$this->data['temp']='site/lay_out/comment';
		$this->load->view('site/index',$this->data);
	}
	
}

?>
