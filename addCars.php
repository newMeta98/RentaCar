<!DOCTYPE html>
<html>
<head>
  <title>Add Cars</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

 <form class="modal-content addcar" method="post" action="action/serverAddCar.php"> 


      <p>Ime <input type="text" name="name"></p>
      <p>Prtljag <input type="text" name="truck"></p>
      <p>Gorivo <input type="text" name="fuel"></p>
      <p>Menjac <input type="text" name="gearbox"></p>
      <p>Max putnika <input type="text" name="passengers"></p>
      <p>Radio <input type="text" name="radio"></p>
      <p>Vrata <input type="text" name="doors"></p>
      <p>Cena <input type="text" name="price"></p>
      <p>Klima <input type="text" name="fan"></p>
      <p>Gps <input type="text" name="gps"></p>

     </br>
      

        <p>1 dan <input type="text" name="1d"><p>
        <p>2 - 5 <input type="text" name="2d5d"><p>
        <p>6 - 10 <input type="text" name="6d10d"><p>
        <p>11 - 15 <input type="text" name="11d15d"><p>
        <p>16 + <input type="text" name="16d"><p>

      </br>



    <input type="submit" name="submitCar" value="Dodaj Auto">
 </form>
  
</body>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</html>