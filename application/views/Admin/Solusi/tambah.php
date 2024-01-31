                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="width: 50%;">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary" style="text-align:center">Tambah Solusi</h5>
                            <div class="card-body">
                                <?php echo form_open_multipart('Solusi/simpan'); ?>
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label">Nama Penyakit</div>
                                    <div class="col-sm-9">
                                        <select name="namaPenyakit" id="Penyakit" class="custom-select">
                                            <option value="" selected disabled>Pilih Penyakit</option>
                                            <?php foreach($penyakit as $p) : ?>
                                                <option value="<?php echo $p->namaPenyakit ?>"><?php echo $p->namaPenyakit ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label">Solusi</div>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="Solusi" id="solusi" cols="30" rows="10"></textarea>
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