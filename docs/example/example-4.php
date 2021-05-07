<?php include_once("./core.php") ?>
<?php include_once("./components/header.php") ?>
<?php include_once("./components/nav.php") ?>

<section class="container" style="margin-top: 130px">
  <?php
    if (!empty($_POST)) {
      if (empty($_POST['full_name'])) {
        echo "<span style='color: red;'>Please Fill Form Data.</span>";
      } else {
        echo "<span style='color: green;'>Data has been successful saved.</span>";
      }
    }
  ?>
  <hr>
  <h3>Example - 4</h3>
  <p style="margin-bottom: 30px">Form in the Model (Use <code>page_loaded</code> custom key)</p>
  <hr>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Insert Entry
  </button>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php include_once("./components/form.php") ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once("./components/footer.php") ?>