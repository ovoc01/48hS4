
<?php
    $this->load->view("admin/templates/header.php");
    $this->load->view("admin/templates/sidebar.php");

?>
<main id="main" class="main">
  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Codes deja utilisé</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">intitule</th>
                    <th scope="col">Nombre de fois</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($code_use as $code){ ?>
                            <tr>
                                <th scope="row"><?=$code['idCode']?></th>
                                <td><?=$code['intitule']?></td>
                                <td><?=$code['usage_count']?></td>
                                <td>
                                   <a href="<?php echo base_url("code/invalidate_code?id=").$code['idCode']?>"><button class="btn btn-primary">Expirez</button></a> 
                                </td>
                            </tr>
                    <?php } ?>
                </tbody>
              </table>

            </div>
          </div>

        </div>
      </div>
    </section>
</main>
<?php 
    $this->load->view("admin/templates/footer.php");
?>

