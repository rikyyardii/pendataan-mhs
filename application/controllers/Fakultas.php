<?php
class Fakultas extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('fakultas_model');
  }

  function index(){
    $data['fakultas'] = $this->fakultas_model->get_fakultas();
    $this->load->view('fakultas_view',$data);
  }
  function add_new(){
    $data['fakultas'] = $this->fakultas_model->get_fakultas();
    $this->load->view('add_fakultas_view');
  }

  function save(){
    $fakultas_id = $this->input->post('fakultas_id');
    $fakultas_name = $this->input->post('fakultas_name');
    $this->fakultas_model->save($fakultas_id,$fakultas_name);
    redirect('fakultas');
  }

  function add_fakultas(){
    $data['fakultas'] = $this->fakultas_model->add_fakultas();
    $this->load->view('add_fakultas_view', $data);
  }

  function delete(){
    $fakultas_id = $this->uri->segment(3);
    $this->fakultas_model->delete($fakultas_id);
    redirect('fakultas');
  }
  
  function get_edit(){
    $fakultas_id = $this->uri->segment(3);
    $result = $this->fakultas_model->get_fakultas_id($fakultas_id);
    if($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'fakultas_id' => $i['fakultas_id'],
            'fakultas_name'  => $i['fakultas_name'],
        );
        $this->load->view('edit_fakultas_view',$data);
    }else{
        echo "Data Was Not Found";
    }
  }

  function update(){
    $fakultas_id = $this->input->post('fakultas_id');
    $fakultas_name = $this->input->post('fakultas_name');
    $this->fakultas_model->update($fakultas_id, $fakultas_name);
    redirect('fakultas');
  }
}