                <!-- Begin Page Content -->
                <!-- Content Row -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Rule</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4" style="width: 100%;">
                        <div class="card-header py-3">
                            <span class="m-0 font-weight-bold " style="color: #669fd6;">Tabel Rule</span> <a
                                href="<?php echo site_url('Rule/tambah') ?>"
                                class="btn float-right" style="background-color: #669fd6; color:white;">Tambah Rule</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="100px" style="text-align: center;">No</th>
                                            <th width="300px" style="text-align: center;">Penyakit</th>
                                            <th width="400px" style="text-align: center;">Gejala</th>
                                            <th width="100px" style="text-align: center;">MB</th>
                                            <th width="100px" style="text-align: center;">MD</th>
                                            <th width="120px" style="text-align: center;">Action</th>
                                        </tr>
                                        <?php $no=1; foreach ($rule as $item) { ?>
                                            <tr>
                                                <td style="text-align: center;">
                                                    <?php echo $no++ ?>
                                                </td>
                                                <td>
                                                    <?php echo $item->namaPenyakit; ?>
                                                </td>
                                                <td>
                                                    <?php echo $item->namaGejala; ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php echo $item->mb; ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php echo $item->md; ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <a href="<?php echo site_url('Rule/getid_Rule/' . $item->idRule); ?>"
                                                        class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                    <a href="<?php echo site_url('Rule/hapus_Rule/' . $item->idRule); ?>"
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