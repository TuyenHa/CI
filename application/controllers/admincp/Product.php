<?php 
class Product extends MY_Controller{
	public function __construct(){
		//ham tao va goi cac moel và library
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('Category_model');
		$this->load->library('pagination');
	}
	function index(){
		//phan trang
		$this->load->library('pagination');
		$config=array();
		$config['base_url']=base_url()."admincp/product/index";
		$config['total_rows']=$this->admin_model->coutAll();
		$config['per_page']=4;
		$segment=$this->uri->segment(4);
		$segment=intval($segment);
		$input=array();
		$input['limit']=array($config['per_page'],$segment);
		$list_data=$this->admin_model->get_list($input);
		$this->pagination->initialize($config);
		$pagination=$this->pagination->create_links();
		$this->data['pagination']= $pagination;
		$message=$this->session->flashdata('message');
		//gui du lieu 
		$this->data['message']=$message;
		$this->data['list_data']=$list_data;
		$this->data['pagination']=$pagination;
		$this->data['temp']='site/admin/lay_out/product';
		$this->load->view('site/admin/index',$this->data);
	}
	function addproduct(){
		//them san pham
		$danhmuc=$this->category_model->getList();
		$this->data['danhmuc']=$danhmuc;
		if($this->input->post()){
			$this->form_validation->set_rules('txttensanpham','Tên Sản Phẩm','required|min_length[4]');
			$this->form_validation->set_rules('txtlinksanpham','Link Sản Phẩm','required|min_length[4]');
			$this->form_validation->set_rules('sldanhmuc','Tên Danh Mục','required');
			$this->form_validation->set_rules('txtgia','Giá','required|numeric');
			$this->form_validation->set_rules('txtbaohanh','Bảo Hành','required|min_length[4]');
			$this->form_validation->set_rules('txtsoluong','Số Lượng','required');
			$this->form_validation->set_rules('txttrangthai','Trạng Thái','required|min_length[4]');
			$this->form_validation->set_rules('radio','Sản Phẩm Đặc Biệt','required');
			$this->form_validation->set_rules('txtkhuyenmai','Khuyến Mãi','required|min_length[4]');
			//$this->form_validation->set_rules('txtanhsanpham','Anh Sản Phẩm');
			$this->form_validation->set_rules('txtmota','Mô tả','required');
			$this->form_validation->set_rules('txtngaynhap','Ngày Nhập','required');
			if($this->form_validation->run()){
				$tensanpham=$this->input->post('txttensanpham');
				$danhmuc=$this->input->post('sldanhmuc');
				$linksanpham=$this->input->post('txtlinksanpham');
				$gia=$this->input->post('txtgia');
				$baohanh=$this->input->post('txtbaohanh');
				$soluong=$this->input->post('txtsoluong');
				$spdacbiet=$this->input->post('radio');
				$trangthai=$this->input->post('txttrangthai');
				$khuyenmai=$this->input->post('txtkhuyenmai');
				//$anhsp=$this->input->post('txtanhsanpham');
				$mota=$this->input->post('txtmota');
				$ngaynhap=$this->input->post('txtngaynhap');
				$this->load->library('upload_library');
				$upload_path='./template/img/product/';
				$file_name='txtanhsanpham';
				$upload_data=$this->upload_library->upload($upload_path,$file_name);
				$fileName='';
				if(isset($upload_data['file_name'])){
					$fileName=$upload_data['file_name'];
				}
				$data1=array(
					'ten_san_pham'=>$tensanpham,
					'ten_danh_muc'=>$danhmuc,
					'gia'=>$gia,
					'mo_ta'=>$mota,
					'so_luong'=>$soluong,
					'bao_hanh'=>$baohanh,
					'khuyen_mai'=>$khuyenmai,
					'ngay_nhap'=>$ngaynhap,
					'trang_thai'=>$trangthai,
					'dac_biet'=>$spdacbiet,
					'anh_san_pham'=>$fileName,
					'link_san_pham'=>$linksanpham,
					);
				if($this->admin_model->insert($data1)){
					$this->session->set_flashdata('message','Thêm thành công');
				}else{
					$this->session->set_flashdata('message','Thêm không thành công');
				}
				redirect(base_url().'admincp/product/index');
			}
		}
		$this->data['temp']='site/admin/lay_out/addproduct';
		$this->load->view('site/admin/index',$this->data);
	}
	function editproduct(){
		//lay san pham theo id san pham
		$danhmuc=$this->category_model->getList();
		$this->data['danhmuc']=$danhmuc;
		$id=$this->uri->segment('4');
		$id=intval($id);
		$field='ten_san_pham,ngay_nhap,ten_danh_muc,gia,bao_hanh,so_luong,khuyen_mai,trang_thai,dac_biet,anh_san_pham,mo_ta,tinh_trang,link_san_pham';
		$info_product=$this->admin_model->get_info($id,$field);
		if(!$info_product){
			$this->session->set_flashdata("message","tài khoản không tồn tại");
		}
		if($this->input->post()){
			//thuc hien an nut submit
			$this->form_validation->set_rules('txttensanpham','Tên Sản Phẩm','required|min_length[4]');
			$this->form_validation->set_rules('txtlinksanpham','Link Sản Phẩm','required|min_length[4]');
			$this->form_validation->set_rules('sldanhmuc','Tên Danh Mục','required');
			$this->form_validation->set_rules('txtgia','Giá','required|numeric');
			$this->form_validation->set_rules('txtbaohanh','Bảo Hành','required|min_length[4]');
			$this->form_validation->set_rules('txtsoluong','Số Lượng','required');
			$this->form_validation->set_rules('txttrangthai','Trạng Thái','required|min_length[4]');
			$this->form_validation->set_rules('radio','Sản Phẩm Đặc Biệt','required');
			$this->form_validation->set_rules('txtkhuyenmai','Khuyến Mãi','required|min_length[4]');
			//$this->form_validation->set_rules('txtanhsanpham','Anh Sản Phẩm');
			$this->form_validation->set_rules('txtmota','Mô tả','required|max_length[350]');
			$this->form_validation->set_rules('txtngaynhap','Ngày Nhập','required');
			if($this->form_validation->run()){
				//gan tên vao input thông quan post
				$tensanpham=$this->input->post('txttensanpham');
				$linksanpham=$this->input->post('txtlinksanpham');
				$danhmuc=$this->input->post('sldanhmuc');
				$gia=$this->input->post('txtgia');
				$baohanh=$this->input->post('txtbaohanh');
				$soluong=$this->input->post('txtbaohanh');
				$spdacbiet=$this->input->post('radio');
				$trangthai=$this->input->post('txttrangthai');
				$khuyenmai=$this->input->post('txtkhuyenmai');
				//$anhsp=$this->input->post('txtanhsanpham');
				$mota=$this->input->post('txtmota');
				$ngaynhap=$this->input->post('txtngaynhap');
				//up load anh
				$this->load->library('upload_library');
				$upload_path='./template/img/product/';
				$file_name='txtanhsanpham';
				$upload_data=$this->upload_library->upload($upload_path,$file_name);
				$fileName='';
				if(isset($upload_data['file_name'])){
					$fileName=$upload_data['file_name'];
				}
				//mang du lieu de update
				$data1=array(
					'ten_san_pham'=>$tensanpham,
					'ten_danh_muc'=>$danhmuc,
					'gia'=>$gia,
					'mo_ta'=>$mota,
					'so_luong'=>$soluong,
					'bao_hanh'=>$baohanh,
					'khuyen_mai'=>$khuyenmai,
					'ngay_nhap'=>$ngaynhap,
					'trang_thai'=>$trangthai,
					'dac_biet'=>$spdacbiet,
					'anh_san_pham'=>$fileName,
					'link_san_pham'=>$linksanpham,
					);
				//thuc thi update
				if($this->admin_model->update($id,$data1)){
					$this->session->set_flashdata('message','Sửa thành công');
				}else{
					$this->session->set_flashdata('message','Sửa không thành công');
				}
				redirect(base_url().'admincp/product/index');
			}
		}
		//gui du lieu 
		$this->data['info_product']=$info_product;
		$this->data['temp']='site/admin/lay_out/editproduct';
		$this->load->view('site/admin/index',$this->data);
	}
	function deleteproduct(){
		//xoa theo id san pham
		$id=$this->uri->segment('4');
		//$where=array('id_san_pham'=>$id);
		if($this->admin_model->delete($id)){
			$this->session->set_flashdata('message','Xoa thanh cong');
		}else{
			$this->session->set_flashdata('message','Xoa khong thanh cong');
		}
		//chuyen trang sang hien thi san pham
		redirect(base_url().'admincp/product/index');
	}
}

?>