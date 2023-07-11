
<?php
    $this->load->view("admin/templates/header.php");
    $this->load->view("admin/templates/sidebar.php");
    $message = "";
    if(isset($_GET['success'])){
        $message = $_GET['success'];
    }

?>
<main class="main" id="main">
    <div class="card col-lg-6">
              <div class="card-body">
                <h5 class="card-title">Entrez le code</h5>
  
                <!-- Floating Labels Form -->
                <form class="row g-3" method="POST" action="<?=base_url("code/new_code_insertion")?>">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input name="code" type="number" class="form-control" id="floatingName" placeholder="Your Name">
                      <label for="floatingName">Code</label>
                    </div>
                  </div>
                <div class="col-md-12">
                    <div class="form-floating">
                      <input name="montant" type="number" class="form-control" min="0" id="floatingName" placeholder="Your Name">
                      <label for="floatingName">Montant</label>
                    </div>
                  </div>
                  <p class="text-success"><?=$message?></p>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Validez</button>
                  </div>
                </form><!-- End floating Labels Form -->
  
              </div>
    </div>
</main>
<?php 
    $this->load->view("admin/templates/footer.php");
?>

