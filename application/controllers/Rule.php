<?php

class Rule extends CI_Controller
{

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
        $data['user'] = $this->db->get_where('user', [
            'idUser' =>
            $this->session->userdata('idUser')
        ])->row_array();
        $data['rule'] = $this->db->select('a.*,
            b.`idGejala`,
            b.`namaGejala`,
            c.`idPenyakit`,
            c.`namaPenyakit`')
            ->from('rule a')
            ->join('gejala b', 'a.idGejala=b.idGejala', 'left')
            ->join('penyakit c', 'a.idPenyakit=c.idPenyakit', 'left')
            ->order_by('idRule', 'asc')

            ->get()
            ->result();
        $this->template->load('Admin/layout', 'Admin/Rule/index', $data);
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', [
            'idUser' =>
            $this->session->userdata('idUser')
        ])->row_array();
        $data['gejala'] = $this->Mcrud->get_all_data('gejala')->result();
        $data['penyakit'] = $this->Mcrud->get_all_data('penyakit')->result();
        $this->template->load('Admin/layout', 'Admin/Rule/tambah', $data);
    }

    public function simpan()
    {
        $penyakit   = $this->input->post('Penyakit');
        $gejala     = $this->input->post('Gejala');
        $mb         = $this->input->post('MB');
        $md         = $this->input->post('MD');

        $data = array(
            'idPenyakit'    => $penyakit,
            'idGejala'    => $gejala,
            'mb'    => $mb,
            'md'    => $md
        );
        $this->Mcrud->insert('rule', $data);
        redirect('Rule');
    }

    public function getid_Rule($id)
    {
        $data['user'] = $this->db->get_where('user', [
            'idUser' =>
            $this->session->userdata('idUser')
        ])->row_array();
        $datawhere      = array('idRule' => $id);
        $data['rule'] = $this->Mcrud->get_by_id('rule', $datawhere)->row_object();
        $data['penyakit'] = $this->Mcrud->get_all_data('Penyakit')->result();
        $data['gejala'] = $this->Mcrud->get_all_data('gejala')->result();
        $this->template->load('Admin/layout','Admin/Rule/edit', $data);
    }

    public function edit()
    {
        $id         = $this->input->post('idRule');
        $penyakit   = $this->input->post('Penyakit');
        $gejala     = $this->input->post('Gejala');
        $mb         = $this->input->post('MB');
        $md         = $this->input->post('MD');
        $data = array(
            'idRule' => $id,
            'idPenyakit' => $penyakit,
            'idGejala' => $gejala,
            'mb' => $mb,
            'md' => $md
        );
        $this->Mcrud->update('rule', $data, 'idRule', $id);
        redirect('Rule');
    }

    public function hapus_Rule($id)
    {
        $datawhere = array('idRule' => $id);
        $this->Mcrud->delete('rule', $datawhere);
        redirect('Rule');
    }
}