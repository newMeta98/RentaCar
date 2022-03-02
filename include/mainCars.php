<div class="mainCars">
  <img class="mainCars_logos" src="img/marke-automobila.jpg">

<div class="row">
   
  <?php $i = 1;
        $z = 0;
   while($rows=mysqli_fetch_assoc($cars_result)){   
              $carid = $rows['carid'];
              ?> 
  <div class="column">
        <?php  
            $cairimg = "SELECT * FROM img WHERE carid = '$carid'" ;
            $cairimg_result = mysqli_query($db, $cairimg);
           
            while($rowsimg=mysqli_fetch_assoc($cairimg_result))
              { 
                   
        ?> <div class="slider">
        <div class="mySlides imgnum<?= $i; ?>">
            <button class="prev" onclick="plusDivs(-1, <?= $z; ?>)">
              <img src="img/strelicaLevo.png" width="20px">
            </button>
            <img src="<?= $rowsimg['img']; ?>" alt= "">
            <button class="prev next" onclick="plusDivs(1, <?= $z; ?>)">
              <img src="img/strelicaDesno.png" width="20px">
            </button>
        </div>
      </div>

        <p class="fontSF"><?php  } $i++; $z++; 

            if ($rows['name'] == 'skodago') {
              echo SKODAGO;
            }elseif ($rows['name'] == 'up') {
              echo UP;
            }elseif ($rows['name'] == 'fabia') {
              echo FABIA;
            }elseif ($rows['name'] == 'fiesta') {
              echo FIESTA;
            }elseif ($rows['name'] == 'yaris') {
              echo YARIS;
            }elseif ($rows['name'] == 'astra') {
              echo ASTRA;
            }elseif ($rows['name'] == 'logan') {
              echo LOGAN;
            }elseif ($rows['name'] == 'focus') {
              echo FOCUS;
            }elseif ($rows['name'] == 'fluence') {
              echo FLUENCE;
            }elseif ($rows['name'] == 'tipo') {
              echo TIPO;
            }elseif ($rows['name'] == 'octavia') {
              echo OCTAVIA;
            }elseif ($rows['name'] == 'opelastra') {
              echo OPELASTRA;
            }
         ?></p>



        <p class="fontSFlite"><?php          
           if ($rows['price'] == '30') {
              echo D30;
            }elseif ($rows['price'] == '32') {
              echo D322;
            }elseif ($rows['price'] == '35') {
              echo D35;
            }elseif ($rows['price'] == '33') {
              echo D333;
            }elseif ($rows['price'] == '40') {
              echo D40;
            }elseif ($rows['price'] == '42') {
              echo D422;
            }
            ?></p>


    <?php 
      if ($rows['passengers'] == 4) {
        $passengers = PUTNIKA4;
      }elseif ($rows['passengers'] == 5) {
        $passengers = PUTNIKA5;
      }
      if ($rows['doors'] == 3) {
        $doors = DOORS3;
      }elseif ($rows['doors'] == 5) {
        $doors = DOORS5;
      }
      if ($rows['fuel'] == 'benzin') {
        $fuel = FUEL;
      }
        if ($rows['gearbox'] == 'manual') {
        $gearbox = MANUAL;
      }elseif ($rows['gearbox'] == 'automatic') {
        $gearbox = AUTOMATIC;
      }
      if ($rows['radio'] == 'y') {
        $radio = RADIO;
      }
      if ($rows['fan'] == 'y') {
        $fan = FAN;
      }
    ?>
    <div class="car_icons">
      <a href="#" class="tooltip">
        <img src="img/passengers.png">
        <span><?= $passengers ?></span>
      </a>
      <a href="#" class="tooltip">
        <img src="img/truck.png">
        <span><?= $rows['passengers']?></span>
      </a>
      <a href="#" class="tooltip">
        <img src="img/doors.png">
        <span><?= $doors ?></span>
      </a>
      <a href="#" class="tooltip">
        <img src="img/fuel.png">
        <span><?= $fuel ?></span>
      </a>
      <a href="#" class="tooltip">
        <img src="img/gearbox.png">
        <span><?= $gearbox ?></span>
      </a>
      <a href="#" class="tooltip">
        <img src="img/radio.png">
        <span><?= $radio ?></span>
      </a>
      <a href="#" class="tooltip">
        <img src="img/fan.png">
        <span><?= $fan ?></span>
      </a>
      <?php if ($rows['gps'] == "y") {
        $gps = '      <a href="#" class="tooltip">
        <img src="img/gps.png">
        <span>'. GPS .'</span>
      </a>';
        echo $gps;
      }?>
      
    </div>
    <button class="reservCars_btn fontSF btn_triger_Reserv btn_triger_ReservCar" value="<?= $rows['carid']?>"><?php echo RESERV_BTN?></button>
  </div>
<?php } ?>
</div>

<div class="main3">
    <div class="artileCar">
        <img src="img/start-logotip.png" width="250px">
        <p><?php echo POCETNA_TXT1?>
        </p>
        <p><?php echo POCETNA_TXT2?>
        </p>
        <p><?php echo POCETNA_TXT3?>
        </p>
    </div>
    <div class="imgWhiteCar">
        <img src="img/carwhite.png">
    </div>
</div>
<div class="main4">
    <div class="imgWhiteCar2">
        <img src="img/automobilcici.jpg">
    </div>
    <div class="artileCar2">
        <img src="img/kreditna-kartica.png" width="250px">
        <img src="img/kovid-1.png" width="660px">
    </div>
    <div class="instagram">
        <img src="img/IG.png">
        <b>@start.rent.a.car</b>
    </div>
</div>
</div>
