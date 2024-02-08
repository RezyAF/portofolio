<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

class Absensi extends REST_Controller {
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Mquery');   
    }

    function index_get(){
        $where = array();
        $res = $this->Mquery->ambildata('daftar_hadir', $where)->result();
        $this->response($res, 200);
    }
    function index_delete($id){
        //karyawanname adalah nama field
        $where = array('id'=>$id);
        $res = $this->Mquery->ambildata('daftar_hadir', $where);

        if ($res->num_rows() !=0){
            $res = $this->Mquery->deletedata('daftar_hadir', $where);
            if($res)$this->response(array('status'=> 'data berhasil dihapus!'), 200);
            else $this->response(array('status'=> 'data gagal dihapus!!!'), 200);
        } else {
            $this->response(array('status'=> 'data tidak ditemukan'), 200);
        } 
    }

    function index_post()
    {
        $data = array(
            "id"  => $this->post("id"),
            "nama_karyawan"  => $this->post("nama_karyawan"),
            "tanggal"      => $this->post("tanggal"),
            "lokasi_absen"      => $this->post("lokasi_absen"),
            "jam_masuk"      => $this->post("jam_masuk"),
            "jam_keluar"      => $this->post("jam_keluar")
        );
        //print_r($data); exit;
        $res = $this->Mquery->tambahdata('daftar_hadir', $data);

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
            "id"     => $this->put("id"),
            "nama_karyawan"     => $this->put("nama_karyawan"),
            "tanggal"           => $this->put("tanggal"),
            "lokasi_absen"      => $this->put("lokasi_absen"),
            "jam_masuk"         => $this->put("jam_masuk"),
            "jam_keluar"        => $this->put("jam_keluar")
        );
        //print_r($data); exit;

        $where = array ('id'=> $this->put("id"));
        //print_r($where); exit;
        $cek = $this->Mquery->ambildata('daftar_hadir', $where);

        if ($cek->num_rows()!=0){
            $res = $this->Mquery->ubahdata('daftar_hadir', $data, $where);

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