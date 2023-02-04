<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->model('Transaksi_model');
        $this->load->model('Kamar_model');
        if (! $this->session->userdata('email')) redirect('Auth/login');
        if(! $this->session->userdata('akses')=='admin'){
            redirect('mainpage');
        }
        $this->load->database();
    }
    public function index(){
        $this->load->view('admin/tamu/check-in');
    }
    public function checkin(){
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $notelp = $this->input->post('notelp');
        $checkin = $this->input->post('cek_in');
        $checkout = $this->input->post('cek_out');
        $jumlah = $this->input->post('jumlah');
        $jenis = $this->input->post('jenis');
        $checkinTombol = $this->input->post('checkin');

        if(!$checkinTombol){
            redirect('mainpage');
        }else{
            $dataUser = array(
                'firstname'=>$firstname,
                'lastname' => $lastname,
                'email' => $email,
                'notelp' => $notelp
            );
            $dataTransaksi = array(
                'cek_in' => $checkin,
                'cek_out' => $checkout,
                'jumlah' => $jumlah,
                'jenis'=>$jenis,
                'firstname'=>$firstname,
                'lastname' => $lastname,
                'email' => $email,
                'notelp' => $notelp,
                'status' =>'confirm'
            );
            $this->db->insert('user',$dataUser);
            $this->db->insert('transaksi',$dataTransaksi);
            redirect('mainpage');

        }
    }

    public function checkout(){
        $data['checkout'] = $this->Transaksi_model->readTransaksi();
        $data['error'] = '';
        $data['result'] = $this->db->order_by('id','DESC')->get('transaksi')->result();
        $this->load->view('admin/tamu/check-out',$data);
    }
    public function inventaris ($id){
        $query = $this->db->get_where('transaksi',['id'=>$id])->row();
        if($query){
            $dataInventaris = array(
                'id_transaksi' => $query->id,
                'cek_in' =>$query->cek_in,
                'cek_out' => $query->cek_out,
                'jumlah' => $query->jumlah,
                'jenis' => $query->jenis,
                'firstname' => $query->firstname,
                'lastname' => $query->lastname,
                'email' =>$query->email,
                'notelp' =>$query->notelp
            );
            $this->db->insert('inventaris_tamu',$dataInventaris);
            $this->db->delete('transaksi',['id'=>$id]);
            redirect('mainpage');
        }else{
            redirect('mainpage');
        }

    }
    public function inventaristamu(){
        $data['invent'] = $this->db->get('inventaris_tamu')->result();
        $data['result'] = $this->db->order_by('id','DESC')->get('inventaris_tamu')->result();
        $this->load->view('admin/tamu/inventaris',$data);
    }
}

?>