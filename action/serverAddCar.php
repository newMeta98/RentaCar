<?php
session_start();
// connect to the database
  include 'db.php';

if (isset($_POST['submitCar'])) {
 // receive all input values from the form
  $carid = "carid-".md5(rand());
  $carname = mysqli_real_escape_string($db, $_POST['name']);
  $truck = mysqli_real_escape_string($db, $_POST['tuck']);
  $fuel = mysqli_real_escape_string($db, $_POST['fuel']);
  $gearbox = mysqli_real_escape_string($db, $_POST['gearbox']);
  $passengers = mysqli_real_escape_string($db, $_POST['passengers']);
  $radio = mysqli_real_escape_string($db, $_POST['radio']);
  $doors = mysqli_real_escape_string($db, $_POST['doors']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
  $fan = mysqli_real_escape_string($db, $_POST['fan']);
  $gps = mysqli_real_escape_string($db, $_POST['gps']);
  $inuse = "free";

  $Oned = mysqli_real_escape_string($db, $_POST['1d']);
  $Twod = mysqli_real_escape_string($db, $_POST['2d5d']);
  $Sixd = mysqli_real_escape_string($db, $_POST['6d10d']);
  $Elevend = mysqli_real_escape_string($db, $_POST['11d15d']);
  $Sixtend = mysqli_real_escape_string($db, $_POST['16d']);

  // Finally, register user if there are no errors in the form
    $query = "INSERT INTO cars (carid, name, radio, fuel, gearbox, passengers, truck, doors, price, fan, gps, inuse) 
          VALUES('$carid', '$carname', '$radio', '$fuel', '$gearbox', '$passengers', '$truck', '$doors', '$price', '$fan', '$gps', '$inuse')";
    mysqli_query($db, $query);

      $query = "INSERT INTO price (carid, 1d, 2d5d, 6d10d, 11d15d, 16d) 
          VALUES('$carid', '$Oned', '$Twod', '$Sixd', '$Elevend', '$Sixtend')";
    mysqli_query($db, $query);
  }
  $_SESSION['carid'] = $carid;
  header('location: ../addCarsImg.php');
?>