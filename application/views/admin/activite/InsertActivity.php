
<?php
    $this->load->view("templates/header.php");
    $this->load->view("templates/sidebar.php");
?>
    <body>
    <main id="main" class="main">
    <div class="pagetitle">
    <h1>Form Elements</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    
    <section class="section">
    <div class="row">
        <div class="col-lg-6">

        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Insert activity</h5>

            <!-- General Form Elements -->
            <form>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Activity</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select activity</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                </div>
                </div>


                <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Gain</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control">
                </div>
                </div>

                <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Perte</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control">
                </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>
            </form><!-- End General Form Elements -->
            </div>
        </div>
        </div>
    </section>

    </main><!-- End #main -->

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