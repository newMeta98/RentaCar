 <?php
 session_start();
 include 'db.php';
// initializing variables
    $carid = $_SESSION['carid'];
    $img_num = $_POST['img_num'];
              $table = 'img';     
              $ext = array('jpg', 'jpeg', 'png', 'gif');
              $file_ext = explode('.',$_FILES["image"]['name'][0]);
              $img_name = $file_ext[0];
              $file_ext = end($file_ext);
              $Name = $img_name."-".$img_num.".".$file_ext;
              if (!in_array($file_ext, $ext)){
              ?> <div class="error-msg">
              <?php  echo $_FILES["image"]['name'] . ' - Invalid file extension!';
            ?> </div> <?php
              }else
              {
              $img_dir = '../img/cars/'.$Name;
              $Img_dir = 'img/cars/'.$Name;
                  move_uploaded_file($_FILES["image"]['tmp_name'][0], $img_dir);

              $sql = "INSERT IGNORE INTO $table (carid, img) VALUES 
              ('$carid', '$Img_dir')";
              $db->query($sql);
              
               echo $_FILES["image"]['name'][0] . ' - Seccess! Image has uploaded!';
              }
 ?>