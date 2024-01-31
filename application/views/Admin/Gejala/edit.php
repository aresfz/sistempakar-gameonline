                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="width: 45%;">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary" style="text-align:center">Edit Gejala</h5>
                            <div class="card-body">
                                <?php echo form_open_multipart('Gejala/edit'); ?>
                                <input type="hidden" name="idGejala" value="<?php echo $gejala->idGejala; ?>">
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label">Kode Gejala</div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="kdGejala" id="Kode" value="<?php echo $gejala->kdGejala;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label">Nama Gejala</div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="namaGejala" id="Nama" value="<?php echo $gejala->namaGejala ?>" >
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End of Main Content -->