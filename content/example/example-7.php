<?php include_once("./core.php") ?>
<?php include_once("./components/header.php") ?>
<?php include_once("./components/nav.php") ?>

<section class="container" style="margin-top: 130px">
  <hr>
  <h3>Example - 7</h3>
  <p style="margin-bottom: 30px">Without Refresh Page with Ajax Request and Success Message in Toast Message (Use <code>background_response</code> custom key)</p>
  <hr>
  <p id="msg_box"></p>
  <?php include_once("./components/form_ajax.php") ?>
</section>
<?php include_once("./components/footer.php") ?>

<script>
  $(function() {
    $("#submit").click(function () {
      var form = document.getElementById('add_record');
      var formdata = new FormData(form);
      $.ajax({
        url: "ajax_request.php",
        type: "POST",
        data: formdata,
        cache: false,
        contentType: false,
        processData: false
      }).done(function(msg){
        if (msg == "Data has been successful saved.") {
          // window.location.href = "example-6.php";
          tata.success('Success', 'Data has been successful saved.', {
            position: 'bm',
          });
        } else {
          alert("This id already exists.");
        }
        window.scroll(0, 0)

      }).fail(function(jqXHR, textStatus){
        alert( "Request failed: " + textStatus );
      });
    })
  });
  </script>