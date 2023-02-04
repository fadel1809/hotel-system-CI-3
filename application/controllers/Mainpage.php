<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mainpage extends CI_Controller{

    public function __construct()
    {   
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->model('Kamar_model');
        $this->load->model('Transaksi_model');
    }
    public function index(){
        if ($this->session->userdata('akses')=='admin'){
            $data['kamar'] = $this->Kamar_model->readKamar();
            $data['error'] = '';
            $data['result'] = $this->db->order_by('id','DESC')->get('kamar')->result();
            $data['transaksi'] = $this->Transaksi_model->readTransaksi();
            $data['error'] = '';
            $data['transaksi'] = $this->db->order_by('id','DESC')->get('transaksi')->result();
            $this->load->view('admin/index',$data);

        }else if($this->session->userdata('akses')=='user'){ 
            $data['kamar'] = $this->Kamar_model->readKamar();
            $data['error'] = '';
            $data['result'] = $this->db->order_by('id','DESC')->get('kamar')->result();
            $data['transaksi'] = $this->Transaksi_model->readTransaksi();
            $data['error'] = '';
            $data['transaksi'] = $this->db->order_by('id','DESC')->get('transaksi')->result();
            $this->load->view('user/index',$data);
        }else{
            redirect('home/login');
        }
           
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
    public function booking($id){
        if(! $this->session->userdata('email')) redirect('home/login');
        $data['details'] = $this->db->get_where('kamar',['id'=>$id])->row();
        $this->load->view('user/booking',$data);
    }
    public function booked(){
        if(!$this->session->userdata('email')) redirect('home/login');
        if(!$this->input->post('pesan')) {
            redirect('/mainpage/booking');
        }else{
            $data = array(
                'cek_in' => $this->input->post('cek_in'),
                'cek_out' => $this->input->post('cek_out'),
                'jumlah' =>$this->input->post('jumlah'),
                'jenis' => $this->input->post('jenis'),
                'firstname' => $this->session->userdata('firstname'),
                'lastname' => $this->session->userdata('lastname'),
                'email' => $this->session->userdata('email'),
                'notelp' => $this->session->userdata('notelp'),

            );
            $this->User_model->inputData($data,'transaksi');
            redirect('mainpage/konfirmasi',$data);
        }
    }
    public function konfirmasi(){
        if(!$this->session->userdata('email')) redirect('home/login');
        $email = $this->session->userdata('email');
        if(!$this->Transaksi_model->readTransaksiByEmail($email)){
            $data['transaksi'] = $this->Transaksi_model->readTransaksiByEmail($email);
            $data['kamar'] = $this->Transaksi_model->getAllTrans();
            $this->session->set_flashdata('emptyorder','Anda belum booking kamar');
            $this->load->view('user/emptyorder');
        }else{
            $data['transaksi'] = $this->Transaksi_model->readTransaksiByEmail($email);
            $data['kamar'] = $this->Transaksi_model->getAllTrans();
            $this->load->view('user/konfirmasi',$data);

        }
    }
    
}
?>