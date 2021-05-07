<?php include_once("./core.php") ?>
<?php include_once("./components/header.php") ?>
<?php include_once("./components/nav.php") ?>

<section class="container" style="margin-top: 130px">
  <?php
    if (!empty($_POST)) {
      if (empty($_POST['full_name'])) {
        // echo "<span style='color: red;'>Please Fill Form Data.</span>";
        header("Location: ". base_url . "error.php");
      } else {
        header("Location: ". base_url . "success.php");
      }
    }
  ?>
  <hr>
  <h3>Example - 3</h3>
  <p style="margin-bottom: 30px">Response Data in the Another Page (success.php)</p>
  <hr>
  <?php include_once("./components/form.php") ?>
</section>

<?php include_once("./components/footer.php") ?>