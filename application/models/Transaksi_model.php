<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model{
    public function readTransaksi(){
        $query = $this->db->get('transaksi');
        return $query->result();
    }
    public function readTransaksiByEmail($email){
        $this->db->where('email',$email);
        $query = $this->db->get('transaksi');
        return $query->row();
    }
    public function readTransaksiById($id){
        $this->db->where('email',$id);
        $query = $this->db->get('transaksi');
        return $query->row();
    }
    public function getAllTrans(){
		return $this->db->get('kamar')->result_array();
	}
    
}