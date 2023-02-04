<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->model('Kamar_model');
    }
	
	public function index()
	{
        $data['kamar'] = $this->Kamar_model->readKamar();
		$this->load->view('home',$data);
	}
    public function login(){
        $this->load->view('login');
    }
    public function ceklogin(){
        $email = $this->input->post('email');
        $login = $this->User_model->getUser($email);
        if($this->input->post('login')){
            if ($login!=null){
                $data = array(
                    'id'=>$login->id,
                    'firstname'=>$login->firstname,
                    'lastname' => $login->lastname,
                    'email' => $login->email,
                    'password' => $login->password,
                    'notelp' => $login->notelp,
                    'akses'=> $login->akses
                );
                if ($this->input->post('password')==$login->password){
					$this->session->set_userdata($data);
                    $this->session->set_flashdata('nama',$login->firstname);
					redirect('mainpage');
				}else{
                    $this->session->set_flashdata('msg','*Password yang anda masukkan salah!');
                    redirect('home/login');
                }
            }else{
                $this->session->set_flashdata('msg','*Email salah atau Belum terdaftar!, Silahkan Mendaftar ');
                redirect('home/register');
            }
        }
    }
    public function register(){
        $this->load->view('register');
    }
    public function registered(){
        $this->input->post('firstname');
        $this->input->post('lastname');
        $this->input->post('email');
        $this->input->post('password');
        $this->input->post('notelp');
        if ($this->input->post('register')) {
           
			$this->User_model->daftar();
			if($this->db->affected_rows() > 0){
        		$this->session->set_flashdata('msg', '<p style="color:green">Berhasil mendaftar</p>');
                $this->session->set_flashdata('email', $this->input->post('email'));
        	}else{
        		$this->session->set_flashdata('msg', '<p style="color:red;">Gagal mendaftar!</p>');
        	}
			redirect(base_url('/home/login'));
		}
        
    }
 
}
