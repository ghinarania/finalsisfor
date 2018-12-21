<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CusModel extends CI_Model {

  public function cek_login($table,$where){    
    return $this->db->get_where($table,$where);
  } 

  // Fungsi untuk menampilkan semua data pegawai
  public function view(){
    return $this->db->get('customer')->result();
  }
  
  // Fungsi untuk menampilkan data pegawai berdasarkan id-nya
  public function view_by($id){
    $this->db->where('id', $id);
    return $this->db->get('customer')->row();
  }
  
  public function validation($mode){
    $this->load->library('form_validation'); 
    
    if($mode == "save")
      $this->form_validation->set_rules('input_id', 'id', 'required|numeric|max_length[5]');
    
    $this->form_validation->set_rules('input_name', 'name', 'required|max_length[35]');
    $this->form_validation->set_rules('input_email', 'email', 'required|max_length[35]');
    $this->form_validation->set_rules('input_telp', 'telp', 'required|max_length[35]');
    $this->form_validation->set_rules('input_instagram', 'instagram', 'required|max_length[35]');
    $this->form_validation->set_rules('input_tanggallahir', 'tanggallahir', 'required|max_length[35]');
    $this->form_validation->set_rules('input_pekerjaan', 'pekerjaan', 'required|max_length[35]');
    $this->form_validation->set_rules('input_instansi', 'instansi', 'required|max_length[35]');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel pegawai
  public function save(){
    $data = array(
      "id" => $this->input->post('input_id'),
      "name" => $this->input->post('input_name'),
      "email" => $this->input->post('input_email'),
      "telp" => $this->input->post('input_telp'),
      "instagram" => $this->input->post('input_instagram'),
      "tanggallahir" => $this->input->post('input_tanggallahir'),
      "pekerjaan" => $this->input->post('input_pekerjaan'),
      "instansi" => $this->input->post('input_instansi')
    );
    
    $this->db->insert('customer', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data pegawai berdasarkan nama pegawai
  public function edit($id){
    $data = array(
      "name" => $this->input->post('input_name'),
      "email" => $this->input->post('input_email'),
      "telp" => $this->input->post('input_telp'),
      "instagram" => $this->input->post('input_instagram'),
      "tanggallahir" => $this->input->post('input_tanggallahir'),
      "pekerjaan" => $this->input->post('input_pekerjaan'),
      "instansi" => $this->input->post('input_instansi')
    );
    
    $this->db->where('id', $id);
    $this->db->update('customer', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data pegawai berdasarkan nama pegawai
  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('customer'); // Untuk mengeksekusi perintah delete data
  }
}