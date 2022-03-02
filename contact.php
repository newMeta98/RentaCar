<?php 
  session_start();
  include 'action/logout.php';
  include 'action/lang.php';
  include 'db.php';
  $title = 'rent a car';
$home = "";
$rental = "";
$vehicles = "";
$services = "";
$contact = "curent";
$mainInclude = 'mainContact.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?></title>
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
</head>
<body>
<?php include 'include/header.php'; ?> 
<?php include 'include/mainAside.php'; ?>
<?php include 'include/loginRegister.php'; ?>
<?php include 'include/footer.php'; ?>
</body>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/datepicker.js"></script>
<script type="text/javascript" src="js/custom-datepicker.js"></script>
<script type="text/javascript" src="js/lng-btn.js"></script>
<script type="text/javascript" src="js/loginRrgister.js"></script>
</html>