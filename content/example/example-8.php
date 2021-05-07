<?php include_once("./core.php") ?>
<?php include_once("./components/header.php") ?>
<?php include_once("./components/nav.php") ?>

<section class="container" style="margin-top: 130px">
  <hr>
  <h3>Example - 8</h3>
  <p style="margin-bottom: 30px">Without Refresh Page with Ajax Request and Form will start feeding when this element is visible. (Use <code>element_exists</code> and <code>background_response</code> custom key)</p>
  <hr>
  <p id="msg_box"></p>
  <div id="form">
    <div>Please Loading.....</div>
  </div>
</section>
<?php include_once("./components/footer.php") ?>

<script>
  $(function() {
    function formSubmit() {
      $("#submit").click(function () {
        var form = document.getElementById('add_record');
        var formData = new FormData(form);
        $.ajax({
          url: "ajax_request.php",
          type: "POST",
          data: formData,
          cache: false,
          contentType: false,
          processData: false
        }).done(function(msg){
          if (msg == "Data has been successful saved.") {
            // window.location.href = "example-6.php";
            tata.success('Success', 'Data has been successful saved.', {
              position: 'bm',
            });
          }
          window.scroll(0, 0)

        }).fail(function(jqXHR, textStatus){
          alert( "Request failed: " + textStatus );
        });
      })
    }

    function insert_form() {
      $.ajax({
        url: "components/form_ajax.php",
        type: "GET",
        cache: false,
        contentType: false,
        processData: false
      }).done(function(res){
        $("#form").html(res)
        formSubmit()
      }).fail(function(jqXHR, textStatus){
        alert( "Request failed: " + textStatus );
      });
    };

    setTimeout(() => {
      insert_form();
    }, 1000 * 5);
  });
</script>