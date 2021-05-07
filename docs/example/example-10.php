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
        if (mt_rand(0, 1) === 1) {
          // echo "<script>alert('Data has been successful saved.');</script>";
          echo "<span style='color: green;'>Data has been successful saved.</span>";
        } else {
          echo "<span style='color: red;'>This id already exists</span>";
        }
      }
    }
  ?>
  <hr>
  <h3>Example - 10</h3>
  <p style="margin-bottom: 30px">If entry saved error found <code>This id already exists</code> then fill next entry and error store in the excel colum data.</p>
  <hr>
  <?php include_once("./components/form.php") ?>
</section>

<?php include_once("./components/footer.php") ?>