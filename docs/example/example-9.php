<?php include_once("./core.php") ?>
<?php include_once("./components/header.php") ?>
<?php include_once("./components/nav.php") ?>

<section class="container" style="margin-top: 130px">
  <?php
    if (!empty($_POST)) {
      if (empty($_POST['full_name'])) {
        // echo "<script>alert('Please Fill Form Data.');</script>";
        echo "<span style='color: red;'>Please Fill Form Data.</span>";
      } else {
        // echo "<script>alert('Data has been successful saved.');</script>";
        echo "<span style='color: green;'>Data has been successful saved. Record ID: ". mt_rand(12548, 58565) ."</span>";
      }
    }
  ?>
  <hr>
  <h3>Example - 9</h3>
  <p style="margin-bottom: 30px">If entry saved and return record id. Save record id in the excel data.</p>
  <hr>
  <?php include_once("./components/form.php") ?>
</section>

<?php include_once("./components/footer.php") ?>