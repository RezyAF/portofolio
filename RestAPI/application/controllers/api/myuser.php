<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class User extends REST_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mquery');
        $this->load->helper('Utility');
    }

    function index_get(){
        $where = array();
        $res = $this->Mquery->ambildata('user', $where)->result();
        $this->response($res, 200);
    }

    function index_delete($idx){
        $where = array('id' => $idx);
        $res = $this->Mquery->ambildata('user', $where);
        if($res->num_rows() != 0){
            $del = $this->Mquery->hapusdata('user', $where);
            if($del)$this->response(array('status' => true, 'msg' => "data berhasil dihapus"), 200);
            else $this->response(array('status' => false, 'msg' => "data gagal dihapus"), 200);
        }else{
            $this->response(array('status' => false, 'msg' => "data tidak ada di db"), 200);
        }
    }

    function index_post(){
        $data = array(
            "username"  => $this->post("username"),
            "nama"      => $this->post("nama"),
            "alamat"    => $this->post("alamat"),
            "email"     => $this->post("email"),
            "password"  => $this->post("password"),
            "tipeuser"  => $this->post("tipeuser")
        );

        $res = $this->Mquery->tambahdata('user', $data);
        if($res)
            $this->response(array(
                'status' => true, 
                'msg' => "data berhasil ditambah", 
                "data" => $data), 200);
        else 
            $this->response(array('status' => false, 'msg' => "data gagal ditambah"), 200);
        
    }

    function index_put(){
        $data = array(
            "username"  => $this->put("username"),
            "nama"      => $this->put("nama"),
            "alamat"    => $this->put("alamat"),
            "email"     => $this->put("email"),
            "password"  => $this->put("password"),
            "tipeuser"  => $this->put("tipeuser")
        );

        //print_r($data);exit;
        $where = array('id' => $this->put("idx"));
        $cek = $this->Mquery->ambildata('user', $where);
        if($cek->num_rows() != 0){
            $res = $this->Mquery->ubahdata('user', $data, $where);
            if($res)
                $this->response(array(
                    'status'        => true, 
                    'msg'           => "data berhasil diubah", 
                    "before_update" => $cek->result(),
                    "after_update"  => $data)
                , 200);
            else
                $this->response(array('status' => false, 'msg' => "data gagal diubah"), 200);
        }else
            $this->response(array('status' => false, 'msg' => "data tidak ditemukan"), 200);
        

        
        
    }

        



}
