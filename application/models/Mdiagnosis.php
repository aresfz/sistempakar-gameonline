<?php

class Mdiagnosis extends CI_Model
{

    public function listing($table, $order=null){
        $query = $this->db->select('*')
                          ->from($table)
                          ->get();
        return $query->result();
      }
      public function listingOne($where){
        $query = $this->db->select('a.*, b.namaGejala')
                          ->from('rule a')
                          ->join('gejala b', 'b.kdGejala = a.kdGejala', 'left')
                          ->where('a.kdGejala', $where)
                          ->get();
        return $query->row();
      }
      public function listingTwo($where){
        $query = $this->db->select('a.*, b.namaPenyakit')
                          ->from('solusi a')
                          ->join('penyakit b', 'b.kdPenyakit = a.kdPenyakit', 'left')
                          ->where('a.kdPenyakit', $where)
                          ->get();
        return $query->row();
      }
}