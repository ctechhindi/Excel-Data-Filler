<?php include_once("./core.php") ?>
<?php include_once("./components/header.php") ?>

<div class="container">
  <br>
  <p id="loading">(Check Entry is Saved.) Loading...</p>
  <a class="btn btn-danger" href="<?= base_url. "example-14.php" ?>">New Entry</a>
</div>

<script>
setTimeout(() => {
  var loading = document.querySelector("#loading");
  loading.style.display = "none";
  // Data has been successful saved. :: RGF0YSBoYXMgYmVlbiBzdWNjZXNzZnVsIHNhdmVkLg==
  tata.success('Success', atob("RGF0YSBoYXMgYmVlbiBzdWNjZXNzZnVsIHNhdmVkLg=="), {
    position: 'bm',
  });
}, 3000);
</script>

<?php include_once("./components/footer.php") ?>