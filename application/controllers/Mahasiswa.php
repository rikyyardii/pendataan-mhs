<?php
class Mahasiswa extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('mahasiswa_model');
  }
  function index(){
    $data['mahasiswa'] = $this->mahasiswa_model->get_mahasiswa();
    $this->load->view('mahasiswa_view',$data);
  }
  function add_new(){
    $data['fakultas'] = $this->mahasiswa_model->get_fakultas();
    $data['prodi'] = $this->mahasiswa_model->get_prodi();
    $this->load->view('add_mahasiswa_view', $data);
  }

  function save(){
    $mhs_name = $this->input->post('mhs_name');
    $mhs_nim = $this->input->post('mhs_nim');
    $mhs_jenkel = $this->input->post('mhs_jenkel');
    $mhs_email = $this->input->post('mhs_email');
    $prodi_id = $this->input->post('prodi_id');
    $foto = $_FILES['foto'];
    if($foto='') {
    } else {
      $config['upload_path']    = 'assets/foto';
      $config['allowed_types']  = 'jpg|jpeg|png';

      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('foto')){
        echo "Upload Gagal"; die();
      } else {
        $foto=$this->upload->data('file_name');
      }
    }
    $this->mahasiswa_model->save
    (
      $mhs_name,
      $mhs_nim,
      $mhs_jenkel,
      $mhs_email,
      $prodi_id,
      $foto
    );
    redirect('mahasiswa');
  }

  function delete(){
    $mhs_id = $this->uri->segment(3);
    $this->mahasiswa_model->delete($mhs_id);
    redirect('mahasiswa');
  }

  function update(){
    $mhs_id = $this->input->post('mhs_id');
    $mhs_name = $this->input->post('mhs_name');
    $mhs_nim = $this->input->post('mhs_nim');
    $mhs_jenkel = $this->input->post('mhs_jenkel');
    $mhs_email = $this->input->post('mhs_email');
    $prodi_id = $this->input->post('prodi_id');
        $this->mahasiswa_model->update
        (
          $mhs_id,
          $mhs_name,
          $mhs_nim,
          $mhs_jenkel,
          $mhs_email,
          $prodi_id
        );
    redirect('mahasiswa');
  }

  function get_edit(){
    $mhs_id = $this->uri->segment(3);
    $result = $this->mahasiswa_model->get_mhs_id($mhs_id);
    if($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'mhs_name'  => $i['mhs_name'],
            'mhs_nim'     => $i['mhs_nim'],
            'mhs_jenkel'  => $i['mhs_jenkel'],
            'mhs_email'  =>$i['mhs_email'],
            'prodi_id'  =>$i['prodi_id'],
        );
        $this->load->view('edit_mahasiswa_view',$data);
    }else{
        echo "Data Was Not Found";
    }
  }
  
  function print()
  {
    $data['mahasiswa'] = $this->mahasiswa_model->get_mahasiswa("mahasiswa")->result();
    $this->load->view('cetak_all', $data);
  }
  
  function cetak_mhs($id)
  {
    $this->load->model('mahasiswa_model');
    $cetak = $this->mahasiswa_model->cetak_mhs($id);
    $data['cetak'] = $cetak;
    $this->load->view('cetak_mhs', $data);
  }
}