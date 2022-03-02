<?php 
  session_start(); 
 ?>
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
<body><form class="modal-content addcar"  method="post" enctype="multipart/form-data" action="action/upoladimg.php">
      <div class="input-group"><label>Slika</label>
        <select name="img_num">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      <input type="file" name="image[]" id="image" />
         <button type="submit" class="upload_btn" name="uploadFood">Upload</button>
        
      </br></br>

         <a href="addCars.php">Done</a></div>
      </form>
  
  
</body>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</html>