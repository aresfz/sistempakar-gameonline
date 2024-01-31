                <!-- Begin Page Content -->
                <!-- Content Row -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Penyakit</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4" style="width: 70%;">
                        <div class="card-header py-3">
                            <span class="m-0 font-weight-bold" style="color: #669fd6;">Tabel Penyakit</span> <a
                                href="<?php echo site_url('Penyakit/tambah') ?>"
                                class="btn float-right" style="background-color: #669fd6; color:white;">Tambah Penyakit</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="150px" style="text-align: center;">Kode Penyakit</th>
                                            <th style="text-align: center;">Nama Penyakit</th>
                                            <th style="text-align: center;">Penjelasan</th>
                                            <th style="text-align: center;">Solusi</th>
                                            <th width="120px" style="text-align: center;">Action</th>
                                        </tr>
                                        <?php foreach ($penyakit as $item) { ?>
                                            <tr>
                                                <td style="text-align: center;">
                                                    <?php echo $item->kdPenyakit; ?>
                                                </td>
                                                <td>
                                                    <?php echo $item->namaPenyakit; ?>
                                                </td>
                                                <td>
                                                    <?php echo $item->detail; ?>
                                                </td>
                                                <td>
                                                    <?php echo $item->saran; ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <a href="<?php echo site_url('Penyakit/getid_Penyakit/' . $item->idPenyakit); ?>"
                                                        class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                    <a href="<?php echo site_url('Penyakit/hapus_Penyakit/' . $item->idPenyakit); ?>"
                                                        class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->



                    <!-- Content Row -->

                </div>

                <!-- Content Row -->

            </div>
            <!-- End of Main Content -->