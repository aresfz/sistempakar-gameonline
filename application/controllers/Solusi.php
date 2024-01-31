<?php

class Solusi extends CI_Controller
{

    function __construct()
    {
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
        $data['user'] = $this->db->get_where('user', [
            'idUser' =>
            $this->session->userdata('idUser')
        ])->row_array();
        $data['solusi'] = $this->Mcrud->get_all_data('solusi')->result();
            $this->template->load('Admin/layout','Admin/Solusi/index', $data);
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', [
            'idUser' =>
            $this->session->userdata('idUser')
        ])->row_array();
        $data['penyakit'] = $this->Mcrud->get_all_data('Penyakit')->result();
        $this->template->load('Admin/layout','Admin/Solusi/tambah', $data);
    }

    public function simpan()
    {
        $penyakit= $this->input->post('namaPenyakit');
        $solusi = $this->input->post('Solusi');
        $data = array(
            'namaPenyakit' => $penyakit,
            'Solusi' => $solusi
        );
        $this->Mcrud->insert('Solusi', $data);
        redirect('Solusi');
    }

    public function getid_Solusi($id)
    {
        $data['user'] = $this->db->get_where('user', [
            'idUser' =>
            $this->session->userdata('idUser')
        ])->row_array();
        $datawhere      = array('idSolusi' => $id);
        $data['Solusi'] = $this->Mcrud->get_by_id('Solusi', $datawhere)->row_object();
        $data['penyakit'] = $this->Mcrud->get_all_data('Penyakit')->result();
        $this->template->load('Admin/layout','Admin/solusi/edit', $data);
    }

    public function edit()
    {
        $id         = $this->input->post('idSolusi');
        $penyakit   = $this->input->post('namaPenyakit');
        $solusi     = $this->input->post('Solusi');
        $data = array(
            'idSolusi' => $id,
            'namaPenyakit' => $penyakit,
            'solusi' => $solusi
        );
        $this->Mcrud->update('solusi', $data, 'idSolusi', $id);
        redirect('Solusi');
    }

    public function hapus_Solusi($id)
    {
        $datawhere = array('idSolusi' => $id);
        $this->Mcrud->delete('solusi', $datawhere);
        redirect('Solusi');
    }
}