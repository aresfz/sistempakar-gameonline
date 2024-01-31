<?php

class Diagnosa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
        $this->load->model('Mdiagnosis');

        }
    

    public function index()
    {

        $gejala = $this->Mcrud->get_all_data('gejala')->result();
        $data = array(
            'gejala' => $gejala
        );
        $this->template->load('User/layout', 'User/diagnosa', $data);
    }

    public function proses()
    {
        $arbobot = array('0', '1.0', '0.9', '0.8', '0.7', '0.6', '0.5', '0.4', '0.3', '0.2', '0.1');
        $argejala = array();
        $arkondisi = array();

        for ($i = 0; $i < 10; $i++) {
            $kondisi = explode("_", $_POST['kondisi'][$i]);
            if (strlen($_POST['kondisi'][$i]) > 1) {
                $argejala += array($kondisi[0] => $kondisi[0]); // array gejala di pilih user
                // var_dump($argejala);
                $arkondisi += array($kondisi[0] => $kondisi[1]); // array kondisi yang dipilih
            }
        }

        // Perhitungan CF 
        $sql_penyakit = $this->db->query("SELECT * FROM penyakit order by idPenyakit");
        $array_penyakit = array();
        foreach ($sql_penyakit->result_array() as $key) {
            // var_dump($rpenyakit);
            
            //$cftotal_temp = 0;
            $cf = 0;
            $query_gejala = $this->db->query("SELECT * FROM rule where idPenyakit = $key[idPenyakit]");
            $cflama = 0;
            // $rgejala = mysqli_fetch_array($query_indikator);
            
            
            foreach ($query_gejala->result_array() as $key => $value) {
              // var_dump($value['strategi_id']);
              $array_kondisi = explode("_", $_POST['kondisi'][0]);
              $gejala = $array_kondisi[0];
              
              
              
              
              for ($i = 0; $i < 10; $i++) {
                $array_kondisi = explode("_", $_POST['kondisi'][$i]);
                $gejala = $array_kondisi[0];
                // var_dump($array_kondisi);
                if ($value['idGejala'] == $gejala) {
                  $cf = ($value['mb'] - $value['md']) * $arbobot[$array_kondisi[1]];
                  if (($cf >= 0) && ($cf * $cflama >= 0)) {
                    $cflama = $cflama + ($cf * (1 - $cflama));
                    // var_dump($cflama);
                  }
                  if ($cf * $cflama < 0) {
                    $cflama = ($cflama + $cf) / (1 - Min(abs($cflama), abs($cf)));
                    // var_dump($cflama);
                  }
                  if (($cf < 0) && ($cf * $cflama >= 0)) {
                    $cflama = $cflama + ($cf * (1 + $cflama));
                    // var_dump($cflama);
                    
                  }
                }
              }
            }
            // var_dump($array_kondisi);
            if ($cflama > 0) {
              $array_penyakit += array($value['idPenyakit'] => number_format($cflama, 3));
              
            } 
          }
          arsort($array_penyakit);

          
          

            // $input_gejala = serialize($argejala);
            // $input_penyakit = serialize($array_penyakit);

            $np1 = 0;
            foreach ($array_penyakit as $key1 => $value1) {
                $np1++;
                $penyakit_1[$np1] = $key1;
                $nilai[$np1] = $value1;
                
            }
            $data['hasil'] = round($nilai[1], 3);
            $data['persentasi'] = round($nilai[1]*100);
            $data['penyakit'] = $array_penyakit;
            $data['penyakit_lain'] = $array_penyakit;
            $data['kondisi'] = $arkondisi;
            $data['penyakit_terpilih'] = $penyakit_1[1];
            // var_dump($data['strategi']);
            $data['gejala'] = $argejala;
            $user = $this->db->get_where('user', [
                'idUser' =>
                $this->session->userdata('idUser')
            ])->row_array();
            $data['user'] = $user;
            $this->template->load('User/layout', 'User/hasil_diagnosa', $data);
    }
}