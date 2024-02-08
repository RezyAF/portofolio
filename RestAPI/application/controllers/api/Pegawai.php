<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Pegawai extends REST_Controller {

    function __construct()
    {
        parent::__construct();
        $this->tabel = "pegawai";
        $this->load->model('Mquery');
    }

    function index_get(){
        $where = array();
        $res = $this->Mquery->ambildata($this->tabel, $where);
        $this->response($res->result(), 200);
    }

    function index_delete($idx){
        $where = array('id' => $idx);
        $cek = $this->Mquery->ambildata($this->tabel, $where);
        if($cek->num_rows() != 0){
            $res = $this->Mquery->hapusdata($this->tabel, $where);
            if($res) 
                $this->response(array(
                    'status' => true, 
                    'msg' => 'data berhasil dihapus'), 200);
        }else{
            $this->response(array(
                'status' => false, 
                'msg' => 'data tidak ditemukan'), 200);
        }
    }

    function index_post(){
        $data = array(
            "id"            => $this->post("id"),
            "nama_pegawai"  => $this->post("nama_pegawai"),
            "alamat"        => $this->post("alamat"),
            "no_hp"         => $this->post("no_hp"),
            "jabatan"       => $this->post("jabatan"),
            "tanggal_masuk" => $this->post("tanggal_masuk"),
            "status_pegawai"=> $this->post("status_pegawai"),
            "divisi"        => $this->post("divisi"),
            "email"             => $this->post("email"),
            "tempat_lahir"      => $this->post("tempat_lahir"),
            "tgl_lahir"         => $this->post("tgl_lahir"),
            "status_pernikahan" => $this->post("status_pernikahan")
        );

       
        $where = array("id" => $this->post("id"));
        $cek = $this->Mquery->ambildata($this->tabel, $where);
        if($cek->num_rows() == 0){
            $res = $this->Mquery->tambahdata($this->tabel, $data);
            if($res)
                $this->response(array(
                    'status' => true, 
                    'msg' => "data berhasil ditambah", 
                    "data" => $data), 200);
            else 
                $this->response(array('status' => false, 'msg' => "data gagal ditambah"), 200);
        }else{
            $this->response(array(
                'status' => false, 
                'msg' => "primary key sudah ada dalam database", 
                "data" => $where), 200);
        }
    }

    function index_put(){
        $data = array(
            "id"            => $this->put("id"),
            "nama_pegawai"  => $this->put("nama_pegawai"),
            "alamat"        => $this->put("alamat"),
            "no_hp"         => $this->put("no_hp"),
            "jabatan"       => $this->put("jabatan"),
            "tanggal_masuk" => $this->put("tanggal_masuk"),
            "status_pegawai"=> $this->put("status_pegawai"),
            "divisi"        => $this->put("divisi"),
            "email"             => $this->put("email"),
            "tempat_lahir"      => $this->put("tempat_lahir"),
            "tgl_lahir"         => $this->put("tgl_lahir"),
            "status_pernikahan" => $this->put("status_pernikahan")
        );

        $where = array('id' => $this->put('id_peg'));

        //var_dump($data);exit;
        $cek = $this->Mquery->ambildata($this->tabel, $where);
        if($cek->num_rows() > 0){
            $res = $this->Mquery->ubahdata($this->tabel, $data, $where);
            if($res)
                $this->response(array(
                    'status' => true, 
                    'msg' => "data berhasil diubah", 
                    "data" => $data), 200);
            else 
                $this->response(array('status' => false, 'msg' => "data gagal diubah"), 200);
        }else{
            $this->response(array('status' => false, 'msg' => "data tidak ada"), 200);
        }
    }
        








}
