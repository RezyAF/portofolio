<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
class Users extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->tabel = "user";
        $this->fields = array("username", "nama", "alamat", "email", "password", "tipeuser");
        $this->load->model('Mquery');
        $this->field = $this->Mquery->getField($this->tabel);
        $this->load->model('Utility');
    }

    //JSON
    function index_get(){
        $where = array();
        $orderby = array();
        $aUser = $this->Utility->GetWhere($where, $orderby, "user")->result();
        $this->response($aUser);
    }
    
    //https://scrimba.com/scrim/ce47V7up
    function index_post(){
        $data = array(
            "id"        => $this->post('id'),
            "username"  => $this->post('username'),
            "nama"      => $this->post('nama'),
            "alamat"    => $this->post('alamat'),
            "email"     => $this->post('email'),
            "password"  => $this->post('password')
        );

        
        $datas = array();
        foreach ($this->field->result() as $row)
		{
            $datas[$row->Field] = $this->post($row->Field);
        }

        var_dump($data);
        var_dump($datas);exit;

        //var_dump($data);exit;

        $res = $this->Utility->InsertData($data, "user");
        if($res){
            $this->response(array("data" => $data, "status" => "success", 200));
        }else{
            $this->response(array("status" => "Fail", 502));
        }
       
    }

    function index_put(){
        $data = array(
            "id"        => $this->put('id'),
            "username"  => $this->put('username'),
            "nama"      => $this->put('nama'),
            "alamat"    => $this->put('alamat'),
            "email"     => $this->put('email'),
            "password"  => $this->put('password')
        );

        //var_dump($data);exit;
        $where = array("id" => $this->put('id'));
        $res = $this->Utility->UpdateData($data, $where, "user");
        if($res){
            $this->response(array("data" => $data, "status" => "success", 200));
        }else{
            $this->response(array("status" => "Fail", 502));
        }
       
    }

    function index_delete($id){
        $where = array("id" => $id);
        $res = $this->Utility->DeleteData($where, "user");
        if($res){
            $this->response(array("status" => "success", 200));
        }else{
            $this->response(array("status" => "Fail", 502));
        }
    }



}
