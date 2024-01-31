<?php

class Gejala extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
        if($this->session->userdata('role') < 1){
			redirect('Login');
		}elseif($this->session->userdata('role') > 1){
            redirect('Homepage');
        }

    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', [
            'idUser' =>
            $this->session->userdata('idUser')
        ])->row_array();
        $data['gejala'] = $this->Mcrud->get_all_data('gejala')->result();
        $this->template->load('Admin/layout','Admin/Gejala/index', $data);
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', [
            'idUser' =>
            $this->session->userdata('idUser')
        ])->row_array();
        $this->template->load('Admin/layout','Admin/Gejala/tambah', $data);
    }

    public function simpan(){
        $kode   = $this->input->post('kdGejala');
        $nama   = $this->input->post('namaGejala');
        $data   = array(
            'kdGejala'      => $kode,
            'namaGejala'    => $nama
        );
        $this->Mcrud->insert('gejala', $data);
        redirect('Gejala');
    }

    public function getid_Gejala($id){
        $data['user'] = $this->db->get_where('user', [
            'idUser' =>
            $this->session->userdata('idUser')
        ])->row_array();
        $datawhere      = array('idGejala' => $id);
        $data['gejala'] = $this->Mcrud->get_by_id('gejala', $datawhere)->row_object();
        $this->template->load('Admin/layout','Admin/Gejala/edit', $data);
    }

    public function edit(){
        $id     = $this->input->post('idGejala');
        $kode   = $this->input->post('kdGejala');
        $nama   = $this->input->post('namaGejala');
        $data   = array(
            'idGejala'      => $id,
            'kdGejala'      => $kode,
            'namaGejala'    => $nama
        );
        $this->Mcrud->update('Gejala', $data, 'idGejala', $id);
        redirect('Gejala');
    }

    public function hapus_gejala($id){
        $datawhere  = array('idGejala' => $id);
        $this->Mcrud->delete('gejala', $datawhere);
        redirect('Gejala');
    }
}