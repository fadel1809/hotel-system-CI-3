<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library('session');
        $this->load->model('Transaksi_model');
        if (! $this->session->userdata('email')) redirect('Auth/login');
        if(! $this->session->userdata('akses')=='admin'){
            redirect('mainpage');
        }
	}

	public function data()
	{
		$data['user']=$this->User_model->readUser();
		$data['error'] = '';
        $data['result'] = $this->db->order_by('id','DESC')
                                    ->get('user')
                                    ->result();
		$this->load->view('admin/user/data', $data);
    }
    public function pending(){
        $data['pending'] = $this->Transaksi_model->readTransaksi();
        $data['error'] = '';
        $data['result'] = $this->db->order_by('id','DESC')->get_where('transaksi',['status'=>'pending'])->result();
        $this->load->view('admin/transaksi/pending',$data);
    }
    public function confirm($id){
        
        $data = array(
            'status'=>'confirm'
        );
        $this->Transaksi_model->readTransaksiById($id);
        $this->db->update('transaksi',$data);
        redirect('mainpage');
    }
    public function confirmed(){
        $data['pending'] = $this->Transaksi_model->readTransaksi();
        $data['error'] = '';
        $data['result'] = $this->db->order_by('id','DESC')->get_where('transaksi',['status'=>'confirm'])->result();
        $this->load->view('admin/transaksi/confirm',$data);
    }
}