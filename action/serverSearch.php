<?php
session_start();
// connect to the database
  include 'db.php';

if (isset($_POST['action'])) {
 // receive all input values from the form
  $select_place = mysqli_real_escape_string($db, $_POST['select_place']);
  $from_date = mysqli_real_escape_string($db, $_POST['from_date']);
  $to_date = mysqli_real_escape_string($db, $_POST['to_date']);
  $pickup_time = mysqli_real_escape_string($db, $_POST['pickup_time']);
  $return_time = mysqli_real_escape_string($db, $_POST['return_time']);
  $daysDiff = mysqli_real_escape_string($db, $_POST['daysDiff']);

  


  
   
   ?>