<?php
    $this->load->view("templates/header.php");
    $this->load->view("templates/sidebar.php");
    
     
?>
<main class="main" id="main">
  <section class="section dashboard">

    <div class="row">
       <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">
  
              <!-- Sales Card -->
              <div class="col-xxl-7 col-md-8">
                <div class="card info-card sales-card">
  
  
                  <div class="card-body">
                    <h5 class="card-title">Solde actuel</span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cash"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?=$solde?>Ar</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Sales Card -->
            </div>
          </div><!-- End Left side columns -->
    </div>
    
      <div class="card col-lg-6">
              <div class="card-body">
                <h5 class="card-title">Entrez le code</h5>
  
                <!-- Floating Labels Form -->
                <form class="row g-3" method="POST" action="<?=base_url("money/insert_code")?>">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input name="code" type="text" class="form-control" id="floatingName" placeholder="Your Name">
                      <label for="floatingName">Code</label>
                    </div>
                  </div>
                  <p class="text-danger"><?=$error?></p>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Validez</button>
                  </div>
                </form><!-- End floating Labels Form -->
  
              </div>
  </section>
          </div>
</main>
<?php   
    $this->load->view("templates/footer.php");
?>
