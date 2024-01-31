<?php

class Penyakit extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
        $this->load->model('Mcrud');
        if($this->session->userdata('role') < 1){
			redirect('Login');
		}elseif($this->session->userdata('role') > 1){
            redirect('Homepage');
        }
    }

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['idUser' =>
            $this->session->userdata('idUser')])->row_array();
            $data['penyakit'] = $this->Mcrud->get_all_data('penyakit')->result();
            $this->template->load('Admin/layout','Admin/Penyakit/index', $data);
	}

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', [
            'idUser' =>
            $this->session->userdata('idUser')
        ])->row_array();
        $this->template->load('Admin/layout','Admin/Penyakit/tambah', $data);
    }

    public function simpan(){
        $kode   = $this->input->post('kdPenyakit');
        $nama   = $this->input->post('namaPenyakit');
        $data   = array(
            'kdPenyakit'      => $kode,
            'namaPenyakit'    => $nama
        );
        $this->Mcrud->insert('penyakit', $data);
        redirect('Penyakit');
    }

    public function getid_Penyakit($id){
        $data['user'] = $this->db->get_where('user', [
            'idUser' =>
            $this->session->userdata('idUser')
        ])->row_array();
        $datawhere      = array('idPenyakit' => $id);
        $data['penyakit'] = $this->Mcrud->get_by_id('penyakit', $datawhere)->row_object();
        $this->template->load('Admin/layout','Admin/penyakit/edit', $data);
    }

    public function edit(){
        $id     = $this->input->post('idPenyakit');
        $kode   = $this->input->post('kdPenyakit');
        $nama   = $this->input->post('namaPenyakit');
        $detail   = $this->input->post('detail');
        $saran   = $this->input->post('solusi');
        $data   = array(
            'idPenyakit'      => $id,
            'kdPenyakit'      => $kode,
            'namaPenyakit'    => $nama,
            'detail'          => $detail,
            'saran'           => $saran
        );
        $this->Mcrud->update('Penyakit', $data, 'idPenyakit', $id);
        redirect('Penyakit');
    }

    public function hapus_Penyakit($id){
        $datawhere  = array('idPenyakit' => $id);
        $this->Mcrud->delete('penyakit', $datawhere);
        redirect('Penyakit');
    }
}