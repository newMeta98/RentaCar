<?php 
  if (isset($_GET['logout'])) {
    session_destroy(); 
     $email_name = "email";
     setcookie($email_name, "", time() - (89700 * 30), "/");
     
     $fname = "fname";
     setcookie($fname, $fname_value, time() - (89700 * 30), "/");

     $lname = "lname";
     setcookie($lname, "", time() - (89700 * 30), "/");

     $pnum = "pnum";
     setcookie($pnum, "", time() - (89700 * 30), "/");


     $bday = "bday";
     setcookie($bday, "", time() - (89700 * 30), "/");


     header("location: index.php");
  }
?>