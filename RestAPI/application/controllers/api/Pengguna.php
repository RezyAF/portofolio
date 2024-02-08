<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Pengguna extends REST_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mquery');
    }

    function index_get(){
        $where = array();
        $res = $this->Mquery->ambildata('user', $where)->result();
        $this->response($res, 200);
    }

    function index_delete($id){
        $where = array('id' => $id);
        $res = $this->Mquery->deletedata('user', $where);

        if($res) $this->response(array('status' => 'data berhasil dihapus bro!'), 200);
        else $this->response(array('status' => 'data Gagal dihapus mas bro!'), 200);
    }

}
