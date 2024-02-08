<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

class jabatan extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Mquery');
        
    }

    function index_get(){
        $where = array();
        $res = $this->Mquery->ambildata('jabatan', $where)->result();
        $this->response($res, 200);
    }

    function index_delete($id){
        //karyawanname adalah nama field
        $where = array('kd_jabatan'=>$id);
        $res = $this->Mquery->ambildata('jabatan', $where);

        if ($res->num_rows() !=0){
            $res = $this->Mquery->deletedata('jabatan', $where);
            if($res)$this->response(array('status'=> 'data berhasil dihapus!'), 200);
            else $this->response(array('status'=> 'data gagal dihapus!!!'), 200);
        } else {
            $this->response(array('status'=> 'data tidak ditemukan'), 200);
        }
        
    }

    function index_post()
    {
        $data = array(
            "kd_jabatan"  => $this->post("kd_jabatan"),
            "nama_jabatan"      => $this->post("nama_jabatan")
        );
        //print_r($data); exit;
        $res = $this->Mquery->tambahdata('jabatan', $data);

        if ($res){
            $this->response(array(
                "status"=>true, 
                "mgs"   =>"Data Berhasil Ditambahkan", 
                "data"  => $data), 200);
        } else $this->response(array(
            "status"=>false,
            "msg"   => "Data gagal ditambahkan", 200));
    }

    //update data
    function index_put()
    {
        $data = array(
            "kd_jabatan"  => $this->put("kd_jabatan"),
            "nama_jabatan"      => $this->put("nama_jabatan")
        );
        //print_r($data); exit;

        $where = array ('kd_jabatan'=> $this->put("kd_jabatan"));
        //print_r($where); exit;
        $cek = $this->Mquery->ambildata('jabatan', $where);

        if ($cek-> num_rows()!=0){
            $res = $this->Mquery->ubahdata('jabatan', $data, $where);

            if ($res){
                $this->response(array(
                    "status"=>true, 
                    "mgs"   =>"Data Berhasil Diubah", 
                    "data"  => $data), 200);
            } else $this->response(array(
                "status"=>false,
                "msg"   => "Data gagal diubah", 200));
            } else {
                $this->response(array(
                    "status" => false,
                    "msg"    => "Data tidak ditemukan"
                ), 200);
            }
        
    }
    
}