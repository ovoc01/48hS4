
<?php
    $this->load->view("templates/header.php");
    $this->load->view("templates/sidebar.php");
?>
<main class="main" id="main">
    <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Quel est votre objectif ?</h5>

              <!-- Accordion without outline borders -->
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Perdre du poids
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Description</div>
                    <div class="accordion-footers">
                        <button type="button" class="btn btn-primary">Commencer</button>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Gain en masse
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Description</div>
                    <div class="accordion-footers">
                        <button type="button" class="btn btn-primary">Commencer</button>
                    </div>
                  </div>
                  
                </div>
              </div><!-- End Accordion without outline borders -->

            </div>
          </div>

        </div>    
</main>

<?php   
    $this->load->view("templates/footer.php");
?>
