                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="width: 50%;">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary" style="text-align:center">Tambah Rule</h5>
                            <div class="card-body">
                                <?php echo form_open_multipart('Rule/simpan'); ?>
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label">Nama Penyakit</div>
                                    <div class="col-sm-9">
                                        <select name="Penyakit" id="penyakit" class="custom-select">
                                            <option value="" selected disabled>Pilih Penyakit</option>
                                            <?php foreach($penyakit as $p) : ?>
                                                <option value="<?php echo $p->idPenyakit ?>">(<?= $p->kdPenyakit?>) - <?php echo $p->namaPenyakit ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label">Nama Gejala</div>
                                    <div class="col-sm-9">
                                        <select name="Gejala" id="gejala" class="custom-select">
                                            <option value="" selected disabled>Pilih Gejala</option>
                                            <?php foreach($gejala as $p) : ?>
                                                <option value="<?php echo $p->idGejala ?>">(<?= $p->kdGejala?>) - <?php echo $p->namaGejala ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label">Nilai MB</div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="MB" id="mb">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label">Nilai MD</div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="MD" id="md">
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