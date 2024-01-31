<div class="container">
    &nbsp;<br><br><br><br>
    <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary" style="text-align:center">Hasil Diagnosa</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-8 msf-form">
                <table class="table table-bordere mb-" border="0">
                    <thead>
                        <tr>
                            <th class="text-center">Kode</th>
                            <th class="text-center">Gejala Terpilih</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php $ig = 0;
                    foreach ($gejala as $key) {
                        $query = $this->db->query("SELECT * FROM gejala where idGejala = $key");
                        $row = $query->result_array();
                        foreach ($row as $data) {
                            echo '<tr><td class="text-center">' . str_pad($data['kdGejala'],STR_PAD_LEFT) . '</td>
                            <td class="text-left">' . $data['namaGejala'] . '</td>';
                            
                        echo '</tr>';
                    } 
                }
                    ?>
                                      
                        
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Kondisi Terpilih</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php  
                        foreach ($kondisi as $key => $value) {
                            $query = $this->db->query("SELECT * FROM kondisi where idKondisi = $value");
                            $row = $query->result_array();
                            foreach ($row as $k => $v) {
                                echo ' <tr>
                                    <td>' . $v['namaKondisi'] . '</td>
                                </tr>';
                            }
                        
                            } 
                        ?>
                       
                    </tbody>
                </table>
            </div>
                <br />
                <div class="container">
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                        <h5 class="m-0 font-weight-bold text-primary text-center">Penyakit</h5>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <!-- <div class="col-md-4">
                            <h5 class="text-left">Direkomendasikan</h5>
                            </div> -->
                        <div class="col-md-8">
                            <!-- <h3 class="text-info"> -->
                                <?php
                                    
                                    $query_penyakit = $this->db->query("SELECT * FROM penyakit order by idPenyakit");
                                    foreach ($query_penyakit->result_array() as $row) {
                                        $nama[$row['namaPenyakit']] = $row['idPenyakit'];
                                        // $detail[$row['penyakit_detail']] = $row['idPenyakit'];
                                        // $saran[$row['penyakit_saran']] = $row['idPenyakit'];
                                        // $foto[$row['foto']] = $row['idPenyakit'];
                                        // $nama[$k['idPenyakit']] = $v['penyakit_nama'];
                                        // $detail[$k['idPenyakit']]    = $v['penyakit_detail'];
                                        // $saran[$k['idPenyakit']]     = $v['penyakit_saran'];
                                        // $foto[$k['idPenyakit']]      = $v['foto'];
                                    
                                    }
                                    $np = 1;
                                    $ns =0 ;
                                    foreach ($penyakit as $row) {
                                        
                                        $np++;
                                        
                                        // $id_penyakit[$np] = $row;
                                        // $nama_penyakit[$np] = $nama[$key];
                                        // var_dump($nama[$row]);
                                    }
                                    $query = $this->db->query("SELECT * FROM penyakit WHERE idPenyakit = $penyakit_terpilih");
                                    foreach ($query->result_array() as $penyakit) {
                                        echo '<div class="text-center">Anda Terdiagnosa '. $penyakit['namaPenyakit'];
                                    }
                                echo '<br> Nilai CF : '. $hasil .' <br> ( '. $persentasi .'% ) </div><br>';
                                echo '<div class="row justify-content-center"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"> Detail </button></div><br>';
                                echo '<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                  <div class="modal-header">
                                  <h5 class="modal-title">Detail Penyakit</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                 </div>
                                 <div class="modal-body">
                                  <strong>Penjelasan</strong><br>' . $penyakit['detail'] . '<strong>Solusi</strong>' . $penyakit['saran'] .
                                 '</div>
                                  </div>
                                </div>
                              </div>';
                               
                               ?>
                               <br>                
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                
            </div>
            </div>
            </div>
    </div>
</div>
