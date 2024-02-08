<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class program_studi extends REST_Controller {

    function __construct()
    {
        parent::__construct();
        $this->tabel = "program_studi";
        $this->load->model('Mquery');
        $this->field = $this->Mquery->getField($this->tabel);
    }

    function index_get(){
        $where = array();
        $res = $this->Mquery->ambildata($this->tabel, $where);
        //var_dump($res);exit;
        $this->response($res->result(), 200);
    }


    function index_delete($idx){
        $where = array('kode_prodi' => $idx);
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

            "kode_prodi"            => $this->post("kode_prodi"),
            "nama_program_studi"    => $this->post("nama_program_studi"),
            "fakultas"              => $this->post("fakultas")
        );

       
        $where = array("kode_prodi" => $this->post("kode_prodi"));
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
                'msg' => "data username sudah ada dalam database", 
                "data" => $where), 200);
        }
    }

    function index_put(){
        $data = array(
            "kode_prodi"            => $this->put("kode_prodi"),
            "nama_program_studi"    => $this->put("nama_program_studi"),
            "fakultas"              => $this->put("fakultas")
        );

        $where = array('kode_prodi' => $this->put('idx'));

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
