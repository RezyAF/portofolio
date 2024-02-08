<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

class Lembur extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Mquery');
        
    }

    function index_get(){
        $where = array();
        $res = $this->Mquery->ambildata('daftar_lembur', $where)->result();
        $this->response($res, 200);
    }

    function index_delete($id){
        //karyawanname adalah nama field
        $where = array('id_lembur'=>$id);
        $res = $this->Mquery->ambildata('daftar_lembur', $where);

        if ($res->num_rows() !=0){
            $res = $this->Mquery->deletedata('daftar_lembur', $where);
            if($res)$this->response(array('status'=> 'data berhasil dihapus!'), 200);
            else $this->response(array('status'=> 'data gagal dihapus!!!'), 200);
        } else {
            $this->response(array('status'=> 'data tidak ditemukan'), 200);
        }
        
    }

    function index_post()
    {
        $data = array(
            "nama_karyawan"  => $this->post("nama_karyawan"),
            "tanggal"      => $this->post("tanggal"),
            "jam_masuk_lembur"      => $this->post("jam_masuk_lembur"),
            "jam_keluar_lembur"      => $this->post("jam_keluar_lembur"),
            "keperluan"      => $this->post("keperluan"),
            "status"      => $this->post("status")
        );
        //print_r($data); exit;
        $res = $this->Mquery->tambahdata('daftar_lembur', $data);

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
            "nama_karyawan"  => $this->put("nama_karyawan"),
            "tanggal"      => $this->put("tanggal"),
            "jam_masuk_lembur"      => $this->put("jam_masuk_lembur"),
            "jam_keluar_lembur"      => $this->put("jam_keluar_lembur"),
            "keperluan"      => $this->put("keperluan"),
            "status"      => $this->put("status")
        );
        //print_r($data); exit;

        $where = array ('id_lembur'=> $this->put("id_lembur"));
        //print_r($where); exit;
        $cek = $this->Mquery->ambildata('daftar_lembur', $where);

        if ($cek-> num_rows()!=0){
            $res = $this->Mquery->ubahdata('daftar_lembur', $data, $where);

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