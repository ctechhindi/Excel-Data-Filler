<?php

  if (!empty($_POST)) {
    if (empty($_POST['full_name'])) {
      // echo "<script>alert('Please Fill Form Data.');</script>";
      echo "<span style='color: red; background-color: white;'>Please Fill Form Data.</span>";
    } else {
      // echo "<script>alert('Data has been successful saved.');</script>";
      
      if (mt_rand(0, 1) === 1) {
        echo 'Data has been successful saved.';
      } else {
        echo "<span style='color: red; background-color: white;'>This id already exists.</span>";
      }
    }
  }
?>