<?php

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
	}

	public function index()
	{
		$data['tgejala'] = $this->Mcrud->hitungJumlahGejala();
		$data['penyakit'] = $this->Mcrud->hitungJumlahPenyakit();
		$data['rule'] = $this->Mcrud->hitungJumlahRule();
        if($this->session->userdata('role') < 1){
			redirect('Login');
		}elseif($this->session->userdata('role') > 1){
            redirect('Homepage');
        }else{
			$data['user'] = $this->db->get_where('user', ['idUser' =>
            $this->session->userdata('idUser')])->row_array();
		$this->template->load('Admin/layout', 'Admin/dashboard' , $data);
		}
		
	}
}
