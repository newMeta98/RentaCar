<?php 

if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
}


if (isset($_GET['lan'])) {
      if ($_GET['lan'] == 'eng') {
       $lang = '<img src="img/Eng.jpg">';
       setcookie('lang', $lang, time() + (86400 * 30), "/"); 
      }elseif ($_GET['lan'] == 'rus') {
       $lang = '<img src="img/Rus.jpg">';
       setcookie('lang', $lang, time() + (86400 * 30), "/"); 
      }elseif ($_GET['lan'] == 'hrv') {
       $lang = '<img src="img/Hrv.jpg">';
       setcookie('lang', $lang, time() + (86400 * 30), "/"); 
      }else{
       $lang = '<img src="img/Srb.jpg">';
       setcookie('lang', $lang, time() + (86400 * 30), "/"); 
      }
    }elseif (isset($_COOKIE['lan'])) {
      if ($_COOKIE['lan'] == 'eng') {
       $lang = '<img src="img/Eng.jpg">';
        setcookie('lang', $lang, time() + (86400 * 30), "/"); 
      }elseif ($_COOKIE['lan'] == 'rus') {
          $lang = '<img src="img/Rus.jpg">';
         setcookie('lang', $lang, time() + (86400 * 30), "/"); 
      }elseif ($_COOKIE['lan'] == 'hrv') {
        $lang = '<img src="img/Hrv.jpg">';
         setcookie('lang', $lang, time() + (86400 * 30), "/"); 
      }else {
        $lang = '<img src="img/Srb.jpg">';
         setcookie('lang', $lang, time() + (86400 * 30), "/"); 
      }
    }else{
      $lang = '<img src="img/Srb.jpg">';
       setcookie('lang', $lang, time() + (86400 * 30), "/"); 
}?> 
<header>
  <ul>
    <div>
      <li><button class="lng-btn" id="lng-btn" onclick="displayFlags()">
          <?php echo $lang; ?><span id="arrow_down" class="arrow_down"><img src="img/icons8-triangle-arrow.png"></span>
        </button>
          <button class="lng-btn" id="Srb" onclick="flagSrb()"><img src="img/Srb.jpg"></button>
          <button class="lng-btn" id="Hrv" onclick="flagHrv()"><img src="img/Hrv.jpg"></button>
          <button class="lng-btn" id="Eng" onclick="flagEng()"><img src="img/Eng.jpg"></button>
          <button class="lng-btn" id="Rus" onclick="flagRus()"><img src="img/Rus.jpg"></button>
      </li><img src="img/header-border.jpg">
    </div>

    <div class="s1 <?= $home?>"><li><a href="index.php"><?php echo NAV_1; ?></a></li><img src="img/header-border.jpg"></div>
    <div class="s2 <?= $rental?>"><li><a href="rental.php"><?php echo NAV_2; ?></a></li><img src="img/header-border.jpg"></div>
    <div class="s3 <?= $vehicles?>"><li><a href="vehicles.php"><?php echo NAV_3; ?></a></li><img src="img/header-border.jpg"></div>
    <div class="s4 <?= $services?>"><li><a href="services.php"><?php echo NAV_4; ?></a></li><img src="img/header-border.jpg"></div>
    <div class="s5 <?= $contact?>"><li><a href="contact.php"><?php echo NAV_5; ?></a></li><img src="img/header-border.jpg"></div>
  </ul>
<img class="header-logo" src="img/start-logo.png">
</header>


