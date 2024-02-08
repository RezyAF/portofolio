<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Siswa extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model("SiswaModel");
    }

    public function index_get()
    {
        $data = $this->SiswaModel->get_data();
		$this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($data, JSON_PRETTY_PRINT))
                ->_display();
        exit;
    }
	
	public function byid_get($id)
    {
        $data = $this->SiswaModel->get_data_byid($id);
		$this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($data, JSON_PRETTY_PRINT))
                ->_display();
		
		//echo json_encode($data, JSON_PRETTY_PRINT);
        exit;
    }

    public function index_post()
    {
		$data = array(
            'id' => $this->post('id'),
            'nama' => $this->post('nama'),
            'jenis_kelamin' => $this->post('jenis_kelamin'),
            'alamat' => $this->post('alamat'));
		//var_dump($data);exit;
		$insert = $this->SiswaModel->insert_data($data);
		if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
		exit;
	}
	
	public function index_put()
    {
		$id = $this->put('id');
        $data = array(
            'id' => $this->put('id'),
            'nama' => $this->put('nama'),
            'jenis_kelamin' => $this->put('jenis_kelamin'),
            'alamat' => $this->put('alamat'));
		
        $update = $this->SiswaModel->updateData($id, $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}


    public function index_delete()
    {
        $id = $this->delete('id');
        $delete = $this->SiswaModel->deleteData($id);
        if ($delete) {
            $this->response(array('status' => 'success'), 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
