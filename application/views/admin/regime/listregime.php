
<?php
    $this->load->view("templates/header.php");
    $this->load->view("templates/sidebar.php");
?>
<body>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>List Regime</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">List Regime</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Regime</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Durée</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Sakafo</td>
                    <td>5$</td>
                    <td>3 mois</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="<?=base_url()?>assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/vendor/chart.js/chart.umd.js"></script>
<script src="<?=base_url()?>assets/vendor/echarts/echarts.min.js"></script>
<script src="<?=base_url()?>assets/vendor/quill/quill.min.js"></script>
<script src="<?=base_url()?>assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?=base_url()?>assets/vendor/tinymce/tinymce.min.js"></script>
<script src="<?=base_url()?>assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?=base_url()?>assets/js/main.js"></script>
 
<?php
    $this->load->view("templates/footer.php");
?>
