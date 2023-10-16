<?php
class Fakultas_model extends CI_Model{
 
  function get_fakultas(){
      $result = $this->db->get('fakultas');
      return $result;
  }  
  
  function save(){
        $fakultas_id = $this->input->post('fakultas_id');
        $fakultas_name = $this->input->post('fakultas_name');
  
      $data = array(
        'fakultas_id' => $fakultas_id,
        'fakultas_name' => $fakultas_name,
      );
      $this->db->insert('fakultas',$data);
    }

    function delete($fakultas_id){
      $this->db->where('fakultas_id', $fakultas_id);
      $this->db->delete('fakultas');
    }
    
    function add_fakultas()
      {
        $this->db->select('*');
        $this->db->from('prodi');
        $query = $this->db->get();

        return $query;
      }

    function get_fakultas_id($fakultas_id)
    {
      $query = $this->db->get_where('fakultas', array('fakultas_id' => $fakultas_id));
      return $query;
    }

    function update($fakultas_id, $fakultas_name)
    {
      $data = array(
        'fakultas_name' => $fakultas_name,
      );
      $this->db->where('fakultas_id', $fakultas_id);
      $this->db->update('fakultas', $data);
    }
}