<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Import extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('mahasiswa_model');
      }
    
    public function index()
	{
		$data['title'] = 'Export Import';
        $this->load->view('import_view', $data);
	}

    public function uploaddata()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();

            $reader->open('uploads/' . $file['file_name']);
            foreach($reader->getSheetIterator() as $sheet){
                $numRow = 1;
                foreach($sheet->getRowIterator() as $row) {
                    if($numRow > 1) {
                        $mahasiswa = array(
                            'mhs_name' => $row->getCellAtIndex(1),
                            'mhs_nim' => $row->getCellAtIndex(2),
                            'mhs_jenkel' => $row->getCellAtIndex(3),
                            'mhs_email' => $row->getCellAtIndex(4),
                            'prodi_id' => $row->getCellAtIndex(5),
                        );
                        $this->mahasiswa_model->import_data($mahasiswa);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/'.$file['file_name']);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Import Data Berhasil!</div>');
                redirect('mahasiswa');
            }
        } else {
            $this->session->set_flashdata('pesan_error', '<div class="alert alert-danger" role="alert">Tidak ada File yang dipilih!</div>');
            redirect('import');
        };
    }
}