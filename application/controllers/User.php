<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
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
}