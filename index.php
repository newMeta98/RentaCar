<?php 
  session_start(); 
  include 'action/lang.php';
  include 'action/logout.php';
  include 'db.php';
   $title = 'rent a car';
$home = "curent";
$rental = "";
$vehicles = "";
$services = "";
$contact = "";

$inuse = "show";
  $cars = "SELECT * FROM cars WHERE inuse = '$inuse' LIMIT 3" ;
  $cars_result = mysqli_query($db, $cars);

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
<?php include 'include/main.php'; ?>
<?php include 'include/mainCars.php'; ?>
<?php include 'include/form.php'; ?>
<?php include 'include/loginRegister.php'; ?>
<?php include 'include/footer.php'; ?>
<div id="target1"></div>
<div id="target2"></div>
<div id="target3"></div>
<div id="target4"></div>
<div id="target5"></div>
</body>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/datepicker.js"></script>
<script type="text/javascript" src="js/custom-modal-reservee.js"></script>
<script type="text/javascript" src="js/custom-datepicker.js"></script>
<script type="text/javascript" src="js/lng-btn.js"></script>
<script type="text/javascript" src="js/slider-btn.js"></script>
<script type="text/javascript" src="js/loginRrgister.js"></script>
<script type="text/javascript">
  function select_input(){
      var inputModule = document.getElementById("input_place_module");
     
        var selected=document.getElementById("select_place_module").value;
  if(selected==3){
      inputModule.style.display = "block";
      var place = document.getElementById("input_place_module").value;
  }else{
      inputModule.style.display = "none";
      var place = document.getElementById("select_place_module").value;
  }
}

  function select_input2(){
      var inputModule2 = document.getElementById("input_place_module2");
     
        var selected=document.getElementById("select_place_module2").value;
  if(selected==3){
      inputModule2.style.display = "block";
      var place = document.getElementById("input_place_module2").value;
  }else{
      inputModule2.style.display = "none";
      var place = document.getElementById("select_place_module2").value;
  }
}
</script>
</html>
