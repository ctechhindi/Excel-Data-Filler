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
        header("Location: ". base_url . "example-13.php");
      }
    }
  ?>
  <hr>
  <h3>Example - 12</h3>
  <p style="margin-bottom: 30px">From <code>12-13</code> (Fill Two Form One-by-One) and Fetch OTP on Server</p>
  <p>
    <strong>Disclaimer: We are not doing any promotion to use this android app. If you use this app, then you will be responsible for your privacy.</strong>
    <a href="https://play.google.com/store/apps/details?id=com.dimonvideo.smstoweb" target="_blank">Android App</a>
  </p>
  <hr>
  <?php include_once("./components/form.php") ?>
</section>

<?php include_once("./components/footer.php") ?>