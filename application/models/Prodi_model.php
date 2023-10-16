<?php
class prodi_model extends CI_Model{
 
  function get_prodi(){
      $this->db->select('*');
      $this->db->from('fakultas');
      $this->db->join('prodi','prodi.fakultas_id = fakultas.fakultas_id');      
    $query = $this->db->get();
    return $query;
  }  

  function get_fakultas(){
    $query = $this->db->get('fakultas');
    return $query;
  }

  function save(){
        $prodi_id = $this->input->post('prodi_id');
        $prodi_name = $this->input->post('prodi_name');
        $fakultas_id = $this->input->post('fakultas_id');
  
      $data = array(
        'prodi_id' => $prodi_id,
        'prodi_name' => $prodi_name,
        'fakultas_id' => $fakultas_id,
      );
      $this->db->insert('prodi',$data);
    }

  function delete($prodi_id){
      $this->db->where('prodi_id', $prodi_id);
      $this->db->delete('prodi');
    }

  function get_prodi_id($prodi_id)
    {
      $query = $this->db->get_where('prodi', array('prodi_id' => $prodi_id));
      return $query;
    }

  function update($prodi_id, $prodi_name)
    {
      $data = array(
        'prodi_name' => $prodi_name,
      );
      $this->db->where('prodi_id', $prodi_id);
      $this->db->update('prodi', $data);
    }
}