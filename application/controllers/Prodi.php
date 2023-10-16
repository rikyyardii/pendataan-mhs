<?php
class Prodi extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('prodi_model');
  }

  function index(){
    $data['prodi'] = $this->prodi_model->get_prodi();
    $data['fakultas'] = $this->prodi_model->get_fakultas();
    $this->load->view('prodi_view',$data);
  }

  function add_new(){
    $data['prodi'] = $this->prodi_model->get_prodi();
    $data['fakultas'] = $this->prodi_model->get_fakultas();
    $this->load->view('add_prodi_view',$data);
  }

  function save(){
    $prodi_id = $this->input->post('prodi_id');
    $prodi_name = $this->input->post('prodi_name');
    $this->prodi_model->save($prodi_id,$prodi_name);
    redirect('prodi');
  }

  function add_prodi(){
    $data['prodi'] = $this->prodi_model->add_prodi();
    $this->load->view('add_prodi_view', $data);
  }

  function delete(){
    $prodi_id = $this->uri->segment(3);
    $this->prodi_model->delete($prodi_id);
    redirect('prodi');
  }

  function get_edit(){
    $prodi_id = $this->uri->segment(3);
    $result = $this->prodi_model->get_prodi_id($prodi_id);
    if($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'prodi_id' => $i['prodi_id'],
            'prodi_name'  => $i['prodi_name']
        );
        $this->load->view('edit_prodi_view',$data);
    }else{
        echo "Data Was Not Found";
    }
  }

  function update(){
    $prodi_id = $this->input->post('prodi_id');
    $prodi_name = $this->input->post('prodi_name');
    $this->prodi_model->update($prodi_id, $prodi_name);
    redirect('prodi');
  }
 } 