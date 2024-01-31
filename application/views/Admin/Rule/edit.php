                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="width: 50%;">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary" style="text-align:center">Edit Rule</h5>
                            <div class="card-body">
                                <?php echo form_open_multipart('Rule/edit'); ?>
                                <input type="hidden" name="idRule" value="<?php echo $rule->idRule ?>">
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label">Nama Penyakit</div>
                                    <div class="col-sm-9">
                                        <select name="Penyakit" id="penyakit" class="custom-select">
                                            <option value="" selected disabled>Pilih Penyakit</option>
                                            <?php foreach($penyakit as $item) : ?>
                                                <option <?php if($item->idPenyakit==$rule->idPenyakit){echo "selected";} ?> value="<?= $item->idPenyakit ?>">(<?= $item->kdPenyakit ?>) - <?= $item->namaPenyakit ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label">Nama Gejala</div>
                                    <div class="col-sm-9">
                                        <select name="Gejala" id="gejala" class="custom-select">
                                            <option value="" selected disabled>Pilih Gejala</option>
                                            <?php foreach($gejala as $item) : ?>
                                                <option <?php if($item->idGejala==$rule->idGejala){echo "selected";} ?> value="<?= $item->idGejala ?>">(<?= $item->kdGejala ?>) - <?= $item->namaGejala ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label">Nilai MB</div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="MB" id="mb" value="<?php echo $rule->mb; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3 col-form-label">Nilai MD</div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="MD" id="md" value="<?php echo $rule->md; ?>">
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