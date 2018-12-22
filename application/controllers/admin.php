<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
    parent::__construct();
    
    $this->load->model('CusModel'); // Load PegModel ke controller ini
	}

	public function index() {
		$this->load->view('login');
	}
	public function login() {
		$this->load->view('admin/index');
	}
	public function loginAction() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->CusModel->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			$this->load->view('admin/index');
 
		}else{
			$this->load->view('login');		}
	}
	public function customer() {
		$data['customer'] = $this->CusModel->view();
    	$this->load->view('admin/customer', $data);
	}

	public function customerTambah(){
	if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->CusModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->CusModel->save(); // Panggil fungsi save() yang ada di PegModel.php
        redirect('admin/customer');
      }
    }
		$this->load->view('admin/customerForm');	
	}

  public function ubah($id){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->CusModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->CusModel->edit($id); // Panggil fungsi edit() yang ada di PegModel.php
        redirect('admin/customer');
      }
    }
    
    $data['customer'] = $this->CusModel->view_by($id);
    $this->load->view('admin/customerForm2', $data);

    
  }
  
  public function hapus($id){
    $this->CusModel->delete($id); // Panggil fungsi delete() yang ada di PegModel.php
    redirect('admin/customer');
  }

	public function company() {
		$this->load->view('admin/company');
	}
	public function companyTambah(){
		$this->load->view('admin/companyForm');	
	}
	public function library() {
		$this->load->view('admin/library');
	}
	public function libraryTambah(){
		$this->load->view('admin/libraryForm');	
	}
	public function product() {
		$this->load->view('admin/product');
	}
	public function productTambah(){
		$this->load->view('admin/productForm');	
	}
	public function post(){
		$this->load->view('admin/posts');	
	}
}
