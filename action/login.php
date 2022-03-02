<?php

// initializing variables
$username = "";
$email    = "";
$errors = array(); 
 
// connect to the database
  include 'db.php';
// LOGIN USER
if (isset($_POST['log_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($email)) {
    array_push($errors, "Email is required");
    echo "Email is required!";
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
    echo "Password is required!";
  }
  $queryUSER = "SELECT * FROM users WHERE email='$email'";
  $resultsUSER = mysqli_query($db, $queryUSER);
  while($rows=mysqli_fetch_array($resultsUSER)){
     $fname_value = $rows['fname'];
     $fname = "fname";
     setcookie($fname, $fname_value, time() + (86400 * 30), "/");

     $lname_value = $rows['lname'];
     $lname = "lname";
     setcookie($lname, $lname_value, time() + (86400 * 30), "/");

     $pnum_value = $rows['pnum'];
     $pnum = "pnum";
     setcookie($pnum, $pnum_value, time() + (86400 * 30), "/");

     $bday_value = $rows['bday'];
     $bday = "bday";
     setcookie($bday, $bday_value, time() + (86400 * 30), "/");
  }
  if (count($errors) == 0) {
    $password = md5($password);
    $query_user = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results_user = mysqli_query($db, $query_user);
    if (mysqli_num_rows($results_user) == 1) {
      $email_name = "email";
      setcookie($email_name, $email, time() + (86400 * 30), "/");
      echo "Hello ".$fname_value;

    }else {
      array_push($errors, "Wrong email/password combination");
      echo "Wrong email/password combination!";
    }
  }
}
?>