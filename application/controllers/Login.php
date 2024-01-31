<?php

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Mlogin');
    }

    public function index(){
        $this->template->load('User/layout','login');
    }

    public function aksi_login(){
        $u      = $this->input->post('username');
        $p      = $this->input->post('password');
        $cek    = $this->Mlogin->cek_login($u, $p)->num_rows();
        $result = $this->Mlogin->cek_login($u, $p)->result();
        if ($cek == 1){
            $data_session = array(
                'idUser'    => $result[0]->idUser,
                'username'  => $u,
                'role'      => $result[0]->role,
                'status'    => 'login'
            );

            $session = $this->session->set_userdata($data_session);
        }else{
            redirect('Login');
        }

        if ($this->session->userdata('role') == 1 ){
            redirect('Dashboard');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}