<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> Payment Gojek - <?= $title; ?> </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/gojek.svg'); ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?= base_url('https://fonts.gstatic.com'); ?>" rel="preconnect">
  <link href="<?= base_url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i'); ?>" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/quill/quill.snow.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/quill/quill.bubble.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/simple-datatables/style.css'); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">

</head>
<body>
  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
  
          <div class="d-flex justify-content-center py-4">
            <a href="index.html" class="logo d-flex align-items-center w-auto">
                <div class="row">
                    <div class="col-md-5">
                        <img src="assets/img/gojek.svg" alt="" sizes="500">
                    </div>
                    <div class="col-md-7">
                        <span class="d-none d-lg-block">Payment Gojek</span>
                    </div>
                </div>
            </a>
          </div><!-- End Logo -->
  
          <div class="card mb-3">
  
            <div class="card-body">
  
              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                <p class="text-center small">Enter your username & password to login</p>
              </div>
  
              <form class="row g-3 needs-validation" novalidate action="<?= base_url('/login'); ?>" method="POST">
                <div class="col-12">
                  <label for="yourUsername" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                    <input type="text" name="username" class="form-control" id="yourUsername" required>
                    <div class="invalid-feedback">Please enter your username.</div>
                  </div>
                </div>
  
                <div class="col-12">
                  <label for="yourPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="yourPassword" required>
                  <div class="invalid-feedback">Please enter your password!</div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit">Login</button>
                </div>
              </form>
              <div class="row">
                <div class="col-md-8 mt-3">
                  <a href="<?= base_url('register'); ?>" class="link">Register Account</a>
                </div>
                <div class="col-md-4"></div>
              </div>
  
            </div>
          </div>
  </section>
</body>
  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/vendor/apexcharts/apexcharts.min.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/chart.js/chart.umd.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/echarts/echarts.min.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/quill/quill.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/simple-datatables/simple-datatables.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/tinymce/tinymce.min.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js'); ?>"></script>
