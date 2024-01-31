                <!-- Begin Page Content -->
                <!-- Content Row -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Solusi</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4" style="width: 100%;">
                        <div class="card-header py-3">
                            <span class="m-0 font-weight-bold text-primary">Tabel Solusi</span> <a
                                href="<?php echo site_url('Solusi/tambah') ?>"
                                class="btn btn-primary float-right">Tambah Solusi</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="100px" style="text-align: center;">ID</th>
                                            <th width="400px" style="text-align: center;">Nama Penyakit</th>
                                            <th style="text-align: center;">Solusi</th>
                                            <th width="120px" style="text-align: center;">Action</th>
                                        </tr>
                                        <?php foreach ($solusi as $item) { ?>
                                            <tr>
                                                <td style="text-align: center;">
                                                    <?php echo $item->idSolusi; ?>
                                                </td>
                                                <td>
                                                    <?php echo $item->namaPenyakit; ?>
                                                </td>
                                                <td>
                                                    <?php echo $item->solusi; ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <a href="<?php echo site_url('Solusi/getid_Solusi/' . $item->idSolusi); ?>"
                                                        class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                    <a href="<?php echo site_url('Solusi/hapus_Solusi/' . $item->idSolusi); ?>"
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