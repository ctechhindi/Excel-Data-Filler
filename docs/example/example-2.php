<?php include_once("./core.php") ?>
<?php include_once("./components/header.php") ?>
<?php include_once("./components/nav.php") ?>

<section class="container" style="margin-top: 130px">
  <?php
    if (!empty($_POST)) {
      if (empty($_POST['full_name'])) {
        echo "<script>alert('Please Fill Form Data.');</script>";
      } else {
        echo "<script>alert('Data has been successful saved.');</script>";
      }
    }
  ?>
  <hr>
  <h3>Example - 2</h3>
  <p style="margin-bottom: 30px">Response Data in the Same Page with Javascript Alert Message</p>
  <hr>
  <?php include_once("./components/form.php") ?>
</section>

<?php include_once("./components/footer.php") ?>