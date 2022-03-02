<?php

// initializing variables
$fname    = "";
$lname    = "";
$username = "";
$email    = "";
$errors = array(); 
// connect to the database
  include 'db.php';

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $img = "images/profile-def.jpg";
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']); 
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $pnum = mysqli_real_escape_string($db, $_POST['pnum']);
  $bday = mysqli_real_escape_string($db, $_POST['bday']);    
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $agree = mysqli_real_escape_string($db, $_POST['agree']);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); echo "Email is required!"; }
  if (empty($password_1)) { array_push($errors, "Password is required"); echo "Password is required!";}
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match"); echo "The two passwords do not match!";
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists"); echo "Email already exists!";
    }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO users (email, fname, lname, pnum, bday, password, profile, agree) 
          VALUES('$email', '$fname', '$lname', '$pnum', '$bday','$password', '$img', '$agree')";
    mysqli_query($db, $query);
     $fname_name = "fname";
     setcookie($fname_name, $fname, time() + (86400 * 30), "/");
     $lname_name = "lname";
     setcookie($lname_name, $lname, time() + (86400 * 30), "/");
    $email_name = "email";
      setcookie($email_name, $email, time() + (86400 * 30), "/");
    $pnum_name = "pnum";
      setcookie($pnum_name, $pnum, time() + (86400 * 30), "/");
    $bday_name = "bday";
      setcookie($bday_name, $bday, time() + (86400 * 30), "/");
          
        echo "Hello ".$fname;
  }}
?>