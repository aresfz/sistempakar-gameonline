<?php

class Mcrud extends CI_Model{

    public function get_all_data($tabel)
    {
        $q = $this->db->get($tabel);
        return $q;
    }

    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function get_by_id($tabel, $id)
    {
        return $this->db->get_where($tabel, $id);
    }

    public function update($tabel, $data, $pk, $id)
    {
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }

    public function delete($tabel, $data)
    {
        $this->db->delete($tabel, $data);
    }

    public function hitungJumlahGejala()
    {
        $query = $this->db->get('gejala');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function hitungJumlahPenyakit()
    {
        $query = $this->db->get('penyakit');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function hitungJumlahRule()
    {
        $query = $this->db->get('rule');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}