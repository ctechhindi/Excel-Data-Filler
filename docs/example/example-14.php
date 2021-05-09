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
        header("Location: ". base_url . "success_ajax.php");
      }
    }
  ?>
  <hr>
  <h3>Example - 14</h3>
  <p style="margin-bottom: 30px">Success message on page but after some time and on another page (Use <code>background_response</code> with time interval)</p>
  <hr>
  <?php include_once("./components/form.php") ?>
</section>
<?php include_once("./components/footer.php") ?>