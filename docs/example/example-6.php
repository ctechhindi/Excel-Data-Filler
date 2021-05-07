<?php include_once("./core.php") ?>
<?php include_once("./components/header.php") ?>
<?php include_once("./components/nav.php") ?>

<section class="container" style="margin-top: 130px">
  <hr>
  <h3>Example - 6</h3>
  <p style="margin-bottom: 30px">Response Data in the Ajax Request (Use <code>background_response</code> custom key)</p>
  <hr>
  <p id="msg_box" style="color: white; background-color: green; padding: 15px; display: none;"></p>
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
        $('#msg_box').fadeIn();
        $("#msg_box").children().not('.close').remove();
        $('#msg_box').show();
        $('#msg_box').append(msg);
        $('#msg_box').fadeOut(3000, function() {
          if (msg == "Data has been successful saved.") {
            window.location.href = "example-6.php";
          }
        });
        window.scroll(0, 0)

      }).fail(function(jqXHR, textStatus){
        alert( "Request failed: " + textStatus );
      });
    })
  });
  </script>