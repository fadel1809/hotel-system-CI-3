<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    public function getUser($email){
        $this->db->where('email',$email);
        return $this->db->get('user')->row();
    }
    public function daftar(){
        $data = array(
            'id' =>null,
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'notelp' => $this->input->post('notelp'),
        );
        $this->db->insert('user',$data);
    }
    public function inputData($data,$tabel){
        $this->db->insert($tabel,$data);

    }
    public function readUser(){
        $query = $this->db->get('user');
        return $query->result();
    }
}