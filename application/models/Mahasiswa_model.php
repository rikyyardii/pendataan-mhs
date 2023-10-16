<?php
class Mahasiswa_model extends CI_Model{
 
  function get_mahasiswa(){
    $this->db->select('*');
    $this->db->from('mahasiswa');
    $this->db->join('prodi','mahasiswa.prodi_id = prodi.prodi_id', 'LEFT');
    $this->db->join('fakultas','fakultas.fakultas_id = prodi.fakultas_id', 'LEFT');
    $query = $this->db->get();
    return $query;
  }
  function save(){
      $mhs_name = $this->input->post('mhs_name');
      $mhs_nim = $this->input->post('mhs_nim');
      $mhs_jenkel = $this->input->post('mhs_jenkel');
      $mhs_email = $this->input->post('mhs_email');
      $prodi_id = $this->input->post('prodi_id');

    $data = array(
      'mhs_name' => $mhs_name,
      'mhs_nim' => $mhs_nim,
      'mhs_jenkel' => $mhs_jenkel,
      'mhs_email' => $mhs_email,
      'prodi_id' => $prodi_id
    );
      $this->db->insert('mahasiswa',$data);
  }

  function delete($mhs_id){
    $this->db->where('mhs_id', $mhs_id);
    $this->db->delete('mahasiswa');
  }

  function update(
    $mhs_id,
    $mhs_name,
    $mhs_nim,
    $mhs_jenkel,
    $mhs_email,
    $prodi_id
    )
  {
    $data = array(
      'mhs_id' => $mhs_id,
      'mhs_name' => $mhs_name,
      'mhs_nim' => $mhs_nim,
      'mhs_jenkel' => $mhs_jenkel,
      'mhs_email' => $mhs_email,
      'prodi_id' => $prodi_id
    );
    $this->db->replace('mahasiswa', $data);
  }
  
  function get_mhs_id($mhs_id){
    $query = $this->db->get_where('mahasiswa', array('mhs_id' => $mhs_id));
    return $query;
  }

  function get_fakultas()
      {
        $this->db->select('*');
        $this->db->from('fakultas');
        $query = $this->db->get();

        return $query;
      }
  function get_prodi()
      {
        $this->db->select('*');
        $this->db->from('prodi');
        $query = $this->db->get();

        return $query;
      }

  function import_data($mahasiswa)
  {
    $jumlah = count($mahasiswa);
    if ($jumlah > 0) {
      $this->db->replace('mahasiswa',$mahasiswa);
    }
  }

  function cetak_mhs($mhs_id = NULL)
  {
    $query = $this->db->get_where('mahasiswa', array('mhs_id' => $mhs_id))->row();
    return $query;
  }
}