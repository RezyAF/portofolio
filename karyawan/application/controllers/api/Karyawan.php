<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

class Karyawan extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Mquery');  
    }

    function index_get(){
        $where = array();
        $res = $this->Mquery->ambildata('karyawan', $where)->result();
        $this->response($res, 200);
    }

    function index_delete($id){
        //karyawanname adalah nama field
        $where = array('kode_karyawan'=>$id);
        $res = $this->Mquery->ambildata('karyawan', $where);

        if ($res->num_rows() !=0){
            $res = $this->Mquery->deletedata('karyawan', $where);
            if($res)$this->response(array('status'=> 'data berhasil dihapus!'), 200);
            else $this->response(array('status'=> 'data gagal dihapus!!!'), 200);
        } else {
            $this->response(array('status'=> 'data tidak ditemukan'), 200);
        }
        
    }

    function index_post()
    {
        $data = array(
            "kode_karyawan"  => $this->post("kode_karyawan"),
            "nama_karyawan"      => $this->post("nama_karyawan"),
            "alamat"    => $this->post("alamat"),
            "email"     => $this->post("email"),
            "jabatan"  => $this->post("jabatan"),
            "divisi"  => $this->post("divisi")
        );
        //print_r($data); exit;
        $res = $this->Mquery->tambahdata('karyawan', $data);

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
            "kode_karyawan"  => $this->put("kode_karyawan"),
            "nama_karyawan"      => $this->put("nama_karyawan"),
            "alamat"    => $this->put("alamat"),
            "email"     => $this->put("email"),
            "jabatan"  => $this->put("jabatan"),
            "divisi"  => $this->post("divisi")
        );
        //print_r($data); exit;

        $where = array ('kode_karyawan'=> $this->put("kode_karyawan"));
        //print_r($where); exit;
        $cek = $this->Mquery->ambildata('karyawan', $where);

        if ($cek-> num_rows()!=0){
            $res = $this->Mquery->ubahdata('karyawan', $data, $where);

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