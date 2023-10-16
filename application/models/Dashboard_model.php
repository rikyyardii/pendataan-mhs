<?php
class Dashboard_model extends CI_Model{
 
  function get_table(){
      $result = $this->load->view('dashboard_view');
      return $result;
  }

  function hitung_mhs() {
    return $this->db->get('mahasiswa')->num_rows();
  }

  function hitung_fakultas() {
    return $this->db->get('fakultas')->num_rows();
  }

  function hitung_prodi() {
    return $this->db->get('prodi')->num_rows();
  }
}