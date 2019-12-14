<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Not Found</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>font5/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
            <h1>404</h1>
            <div class="page-description">
            	Akses Hilang Silakan Login Kembali.
            </div>
            <div class="form-group mt-3">
            <a class="btn btn-primary" href="<?= base_url('auth/logout');?>">Login Kembali !</a>
          </div>
          </div>
        </div>
        <div class="simple-footer mt-5">
          Copyright &copy; Tabungan Kita
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>

  <script src="<?= base_url('assets/'); ?>js/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/moment.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/stisla.js"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="<?= base_url(); ?>/assets/js/scripts.js"></script>
<script src="<?= base_url(); ?>/assets/js/custom.js"></script>

<!-- Page Specific JS File -->

</body>
</html>
