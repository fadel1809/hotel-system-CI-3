<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Kamar_model');
        if (! $this->session->userdata('email')) redirect('Auth/login');
        if(! $this->session->userdata('akses')=='admin'){
            redirect('mainpage');
        }
        $this->load->database();
    }
    public function data(){
        $data['kamar']=$this->Kamar_model->readKamar();
		$data['error'] = '';
        $data['result'] = $this->db->order_by('id','DESC')
                                    ->get('kamar')
                                    ->result();
		$this->load->view('admin/kamar/data', $data);
    }
    public function edit($id)
	{

        $data['detail'] = $this->db->get_where('kamar',['id' => $id])->row();
		$this->load->view('admin/kamar/ubah', $data);

	}
    public function delete($id){
        $_id = $this->db->get_where('kamar',['id'=>$id])->row();
        $query = $this->db->delete('kamar',['id'=>$id]);
        if($query){
            unlink(base_url('/assets/kamar/'.$_id->gambar));
        }
        redirect('Kamar/data');
    }
}

?>