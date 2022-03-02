<?php 

  function setLanguage()
  {
  	if (isset($_GET['lan'])) {
  		if ($_GET['lan'] == 'eng') {
  			require_once ('language/ENG.php');
  		}elseif ($_GET['lan'] == 'rus') {
  			require_once ('language/RUS.php');
  		}elseif ($_GET['lan'] == 'hrv') {
        require_once ('language/HRV.php');
      }elseif ($_GET['lan'] == 'srb') {
  			require_once ('language/SRB.php');
      }
  	}
  	else {
  			require_once ('language/SRB.php');
  		}
  }
  function setLanguageS()
  {
    if (isset($_COOKIE['lan'])) {
      if ($_COOKIE['lan'] == 'eng') {
        require_once ('language/ENG.php');
      }elseif ($_COOKIE['lan'] == 'rus') {
        require_once ('language/RUS.php');
      }elseif ($_COOKIE['lan'] == 'hrv') {
        require_once ('language/HRV.php');
      }elseif ($_COOKIE['lan'] == 'srb'){
        require_once ('language/SRB.php');
      }
    }
    else {
        require_once ('language/SRB.php');
      }
  }
      
      if(!isset($_COOKIE['lan'])){
        if (isset($_GET['lan'])) {
        setcookie('lan', $_GET['lan'], time() + (86400 * 30), "/"); 
        setLanguage();} else{
          setLanguage();
        }
      }elseif(isset($_COOKIE['lan'])) {
        if(isset($_GET['lan'])){
          setLanguage();
         setcookie('lan', $_GET['lan'], time() + (86400 * 30), "/");    
        }else {setLanguageS();
      }}
?>