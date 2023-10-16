<?php
class Dashboard extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('dashboard_model');
  }

  function index(){
    $data['jumlah_mhs'] = $this->dashboard_model->hitung_mhs();
    $data['jumlah_fakultas'] = $this->dashboard_model->hitung_fakultas();
    $data['jumlah_prodi'] = $this->dashboard_model->hitung_prodi();
    $this->load->view('dashboard_view', $data);
  }
}