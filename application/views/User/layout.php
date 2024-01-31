<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kecanduan Game Online</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
    /* CSS Styling */
    .div {
      background-color: rgba(169, 205, 239, 0.4);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      padding: 26px 56px 26px 50px;
    }

    @media (max-width: 991px) {
      .div {
        flex-wrap: wrap;
        padding: 0 20px;
      }
    }

    .div-2 {
      color: #000;
      margin: auto 0;
      font: 600 24px Poppins, sans-serif;
    }

    .div-3 {
      align-self: stretch;
      display: flex;
      justify-content: space-between;
      gap: 20px;
    }

    .div-4,
    .div-5 {
      color: black;
      cursor: pointer;
      text-decoration: none;
      margin: auto 0;
      font: 400 20px Poppins, sans-serif;
    }

    .div-6 {
      color: #fff;
      white-space: nowrap;
      justify-content: center;
      border-radius: 100px;
      box-shadow: 2px 4px 4px 0px rgba(0, 0, 0, 0.25);
      background-color: #669fd6;
      flex-grow: 1;
      padding: 15px 31px;
      font: 600 20px Poppins, sans-serif;
      border: none;
      outline: none;
      cursor: pointer;
    }

    @media (max-width: 991px) {
      .div-6 {
        white-space: initial;
        padding: 0 20px;
      }
    }
  </style>
</head>

<body>
  <div class="div">
    <div class="div-2">SISTEM PAKAR</div>
    <div class="div-3">
      <a href="<?php echo site_url('Homepage') ?>" class="div-4">Home</a>
      <a href="<?php echo site_url('Diagnosa') ?>" class="div-5">Tanya Pakar</a>
      <button onclick="location.href='Login'" class="div-6">Login</button>
    </div>
  </div>
</body>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                
                <!-- End of Topbar -->
                <?= $contents ?>

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->



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
        

</body>

</html>