<?php

class Homepage extends CI_Controller{

    public function index(){
        $data['user'] = $this->db->get_where('user', [
            'idUser' =>
            $this->session->userdata('idUser')
        ])->row_array();
        $this->template->load('User/layout','User/index', $data);
    }
}