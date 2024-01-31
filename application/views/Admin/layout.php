<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Froala -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/froala_editor.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/froala_style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/code_view.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/colors.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/emoticons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/image_manager.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/image.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/line_breaker.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/table.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/char_counter.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/video.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/fullscreen.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/quick_insert.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/file.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/themes/royal.css">
<style>
    .nav-item a.nav-link span {
    color: white;
    
}

</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #669fd6;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">

                <div class="sidebar-brand-text mx-3">SP Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Gejala') ?>">
                    <i class="fas fa-fw fa-syringe"></i>
                    <span>Gejala</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Penyakit') ?>">
                    <i class="fas fa-fw fa-viruses"></i>
                    <span>Penyakit</span></a>
            </li>


            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Rule') ?>">
                    <i class="fas fa-fw fa-brain"></i>
                    <span>Rules</span></a>
            </li>

            <!-- <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Laporan') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Laporan</span></a>
            </li> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                       

                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo $user['username'] ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url() ?>assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <?= $contents ?>

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn" style="background-color: #669fd6; color:white;" href="<?php echo site_url('Login/logout') ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>

        <!-- Froala -->
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/froala_editor.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/align.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/code_beautifier.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/code_view.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/colors.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/draggable.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/emoticons.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/font_size.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/font_family.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/image.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/file.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/image_manager.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/line_breaker.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/link.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/lists.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/paragraph_format.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/paragraph_style.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/video.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/table.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/url.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/entities.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/char_counter.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/inline_style.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/quick_insert.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/save.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/fullscreen.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/froala/js/plugins/quote.min.js"></script>

        <script>
            (function () {
                new FroalaEditor("#edit", {
                    theme: 'royal'
                })
            })()
        </script>

</body>

</html>