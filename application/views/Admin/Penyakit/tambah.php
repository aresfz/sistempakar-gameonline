<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4" style="width: 50%;">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary" style="text-align:center">Tambah Penyakit</h5>
            <div class="card-body">
                <?php echo form_open_multipart('Penyakit/simpan'); ?>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label">Kode Penyakit</div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="kdPenyakit" id="Kode">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label">Nama Penyakit</div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="namaPenyakit" id="Nama">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label">Detail</div>
                    <div class="col-sm-9">
                        <textarea name="detail" id="edit" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label">Solusi</div>
                    <div class="col-sm-9">
                        <textarea name="solusi" id="edit" cols="30" rows="10"></textarea>
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