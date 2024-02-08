<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class User extends REST_Controller {

    function __construct()
    {
        parent::__construct();
        $this->tabel = "tbl_barang";
        $this->load->model('Mquery');
        $this->field = $this->Mquery->getField($this->tabel);
    }

    function index_get(){
        $where = array();
        $res = $this->Mquery->ambildata($this->tabel, $where);
        //var_dump($res);exit;
        $this->response($res->result(), 200);
    }

    function field_get(){
        //$res = $this->Mquery->getField($this->tabel);
        //var_dump($res);exit;
        $this->response($this->field->result(), 200);
    }

    function index_delete($barang_idx){
        $where = array('barang_id' => $barang_idx);
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
            "barang_nama"  => $this->post("barang_nama"),
            "barang_satuan"=> $this->post("barang_satuan"),
            "barang_harpok"    => $this->post("barang_harpok"),
            "barang_harjul"     => $this->post("barang_harjul"),
            "barang_harjul_grosir"  => $this->post("barang_harjul_grosir"),
            "barang_stok"  => $this->post("barang_stok"),
            "barang_min_stok"  => $this->post("barang_min_stok"),
            "barang_tgl_input"  => $this->post("barang_tgl_input"),
            "barang_tgl_lastupdate"  => $this->post("barang_tgl_lastupdate")
        );

       
        $where = array("barang_nama" => $this->post("barang_nama"));
        $cek = $this->Mquery->ambildata($this->tabel, $where);
        if($cek->num_rows() > 0){
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
            "barang_nama"  => $this->put("barang_nama"),
            "barang_satuan"=> $this->put("barang_satuan"),
            "barang_harpok"    => $this->put("barang_harpok"),
            "barang_harjul"     => $this->put("barang_harjul"),
            "barang_harjul_grosir"  => $this->put("barang_harjul_grosir"),
            "barang_stok"  => $this->put("barang_stok"),
            "barang_min_stok"  => $this->put("barang_min_stok"),
            "barang_tgl_input"  => $this->put("barang_tgl_input"),
            "barang_tgl_lastupdate"  => $this->put("barang_tgl_lastupdate")
        );

        $where = array('barang_id' => $this->put('barang_idx'));

        //var_dump($data);exit;
        $cek = $this->Mquery->ambildata($this->tabel, $where);
        if($cek->num_rows() != 0){
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
