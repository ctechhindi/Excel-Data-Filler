<?php include_once("./core.php") ?>
<?php include_once("./components/header.php") ?>
<?php include_once("./components/nav.php") ?>

<section class="container" style="margin-top: 130px">
  <?php
    if (!empty($_POST)) {
      if (empty($_POST['otp'])) {
        // echo "<script>alert('Please Fill Form Data.');</script>";
        echo "<span style='color: red;'>Please Fill Form Data.</span>";
      } else {
        // echo "<script>alert('Data has been successful saved.');</script>";
        echo "<span style='color: green;'>Data has been successful saved.</span>";
      }
    }
  ?>
  <hr>
  <h3>Example - 13</h3>
  <p style="margin-bottom: 30px">Fetch OTP on This Android App Server</p>
  <p>
    <strong>Disclaimer: We are not doing any promotion to use this android app. If you use this app, then you will be responsible for your privacy.</strong>
    <a href="https://play.google.com/store/apps/details?id=com.dimonvideo.smstoweb" target="_blank">Android App</a>
  </p>
  <hr>
  <form action="" method="post">
    <div class="form-group">
      <label for="otp">OTP</label>
      <input type="text" class="form-control" name="otp" id="otp" placeholder="Enter OTP">
    </div>
    <button class="btn btn-danger" type="submit">Submit</button>
  </form>
</section>

<?php include_once("./components/footer.php") ?>