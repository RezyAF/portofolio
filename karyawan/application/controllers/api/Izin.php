<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

class Izin extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Mquery');
        
    }

    function index_get(){
        $where = array();
        $res = $this->Mquery->ambildata('daftar_izin', $where)->result();
        $this->response($res, 200);
    }

    function index_delete($id){
        //karyawanname adalah nama field
        $where = array('id_izin'=>$id);
        $res = $this->Mquery->ambildata('daftar_izin', $where);

        if ($res->num_rows() !=0){
            $res = $this->Mquery->deletedata('daftar_izin', $where);
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
            "nama_izin"      => $this->post("nama_izin"),
            "tanggal"      => $this->post("tanggal"),
            "jam"      => $this->post("jam"),
            "keterangan"      => $this->post("keterangan"),
            "status"      => $this->post("status")
        );
        //print_r($data); exit;
        $res = $this->Mquery->tambahdata('daftar_izin', $data);

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
            "nama_izin"      => $this->put("nama_izin"),
            "tanggal"      => $this->put("tanggal"),
            "jam"      => $this->put("jam"),
            "keterangan"      => $this->put("keterangan"),
            "status"      => $this->put("status")
        );
        //print_r($data); exit;

        $where = array ('id_izin'=> $this->put("id_izin"));
        //print_r($where); exit;
        $cek = $this->Mquery->ambildata('daftar_izin', $where);

        if ($cek-> num_rows()!=0){
            $res = $this->Mquery->ubahdata('daftar_izin', $data, $where);

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