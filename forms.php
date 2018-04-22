<?php>
  include "database.php";

  $organization = $_POST['organization'];
  $first = $_POST['firstname'];
  $last = $_POST['lastname'];
  $email = $_POST['email'];
  $billingAd = $_POST['billingAddress'];
  $guestAmt = $_POST['guests'];
  $type = $_POST['event_type'];
  $tables = $_POST['tables'];
  $chairs = $_POST['chairs'];
  $tablecloths = $_POST['tablecloths'];
  $tblclothcolor = $_POST['tableclothcolor'];
  $linen = $_POST['Linen'];
  $centerpiece = $_POST['Centerpiece'];
  $menu = $_POST['Menuitems'];



  $sqlInsert = "INSERT INTO customer()
    VALUES('$organization','$first','$last','$email','$billingAd');";
  $sqlInsert = "INSERT INTO events()
    VALUES();";


  mysqli_query($conn, $sqlInsert);

  header("Location:../form.php?signup=success");
