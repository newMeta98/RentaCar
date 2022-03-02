<?php
use PHPMailer\PHPMailer\PHPMailer;
session_start();
// connect to the database
  include 'db.php';
  include '../action/lang.php';
if (isset($_POST['action'])){

	$autoEmail = "";
	$autoFname = "";
	$autoLname = "";
	$autoPnum = "";
	$autoBday = "";
  $depozit2 = "";
	if (isset($_COOKIE['email'])) {
			$autoEmail = $_COOKIE['email'];
			$autoFname = $_COOKIE['fname'];
			$autoLname = $_COOKIE['lname'];
			$autoPnum = $_COOKIE['pnum'];
			$autoBday = $_COOKIE['bday'];
	}
if ($_POST['action'] == "search") {
 // send to modal 
echo '
        <div class="form_left_reserev">
            <h3>'.RESERV_BTN.'</h3>
            <select class="select_car_module" id="select_car_module">';
         $carsreserv = "SELECT * FROM cars";
         $cars_reserv = mysqli_query($db, $carsreserv);
            while($rows=mysqli_fetch_assoc($cars_reserv)){ 

              $carid = $rows['carid']; 
                 if ($rows['name'] == 'skodago') { 
                      echo '  <option value="'.$rows['carid'].'">
                             '.SKODAGO.' </option>';
                }elseif($rows['name'] == 'up') { 
                      echo '  <option value="'.$rows['carid'].'">
                             '.UP.' </option>';
                }elseif($rows['name'] == 'fabia') { 
                      echo '  <option value="'.$rows['carid'].'">
                             '.FABIA.' </option>';
                }elseif($rows['name'] == 'fiesta') { 
                      echo '  <option value="'.$rows['carid'].'">
                             '.FIESTA.' </option>';             
                }elseif($rows['name'] == 'yaris') { 
                      echo '  <option value="'.$rows['carid'].'">
                             '.YARIS.' </option>';             
                }elseif($rows['name'] == 'astra') { 
                      echo '  <option value="'.$rows['carid'].'">
                             '.ASTRA.' </option>';             
                }elseif($rows['name'] == 'logan') { 
                      echo '  <option value="'.$rows['carid'].'">
                             '.LOGAN.' </option>';	             
                }elseif($rows['name'] == 'focus') { 
                      echo '  <option value="'.$rows['carid'].'">
                             '.FOCUS.' </option>';     
                }elseif($rows['name'] == 'fluence') { 
                      echo '  <option value="'.$rows['carid'].'">
                             '.FLUENCE.' </option>';
                }elseif($rows['name'] == 'tipo') { 
                      echo '  <option value="'.$rows['carid'].'">
                             '.TIPO.' </option>';
                }elseif($rows['name'] == 'octavia') { 
                      echo '  <option value="'.$rows['carid'].'">
                             '.OCTAVIA.' </option>';
                }elseif($rows['name'] == 'opelastra') { 
                      echo '  <option value="'.$rows['carid'].'">
                             '.OPELASTRA.' </option>';        
 }}
 $option1 = "1";
 $option2 = "2";
 $option3 = "3";
                 	if ($_POST['select_place'] == $option1) {
            			$option11 = "selected = 'selected'";
            		}else{
						$option11 = "";
            		}
            		if ($_POST['select_place'] == $option2) {
            			$option22 = "selected = 'selected'";
            		}else{
						$option22 = "";
            		}
            		if ($_POST['select_place'] == $option3) {
            			$option33 = "selected = 'selected'";
            		}else{
						$option33 = "";
            		}

 $toggle_active = "this.classList.toggle('active')";
   echo '  </select>
                <h5>'. MESTO1 .'</h5>
           
            <select class="select_place_module" id="select_place_module"  onclick="select_input()" required="on" >
                  <option value="" selected="selected">'. FORM_SELECT .'</option>
                  <option value="1" '. $option11 .'>'.FORM_SELECT1 .'</option>
                  <option value="2" '. $option22 .'>'.FORM_SELECT2 .'</option>
                  <option value="3" id="option_place_input1" '. $option33 .'>'.$_POST['place_input'].'</option>
                  <input type="text" class="input_place_module" id="input_place_module"  placeholder="'.FORM_SELECT4.'" value= "'.$_POST['place_input'].'">
            </select>
            
                <h5>'. MESTO2 .'</h5>
            
            <select class="select_place_module" id="select_place_module2" onclick="select_input2()" required="on" >
                  <option value="" selected="selected">'.FORM_SELECT.'</option>
                  <option value="1" >'. FORM_SELECT1 .'</option>
                  <option value="2" >'. FORM_SELECT2 .'</option>
                  <option value="3" id="option_place_input2">'.FORM_SELECT3.'</option>
                  <input type="text" class="input_place_module" id="input_place_module2"  placeholder="'.FORM_SELECT4.'">
            </select> <br/>

                <div class="form_datum_modal">      
                    <h5>'. DATUM1 .'</h5>


<input type="text" name="from_date" id="from_date_module" class="form-control" placeholder="From Date" value= "'.$_POST['from_date'].'" autocomplete="off"  required="on" /> 



                    <select name="pickup_time" id="pickup_time_module" class="pickup-time time_modal" autocomplete="off"  required="on">
                                                        <option value="0">00:00</option>
                            <option value="0.5">00:30</option>
                            <option value="1">01:00</option>
                            <option value="1.5">01:30</option>
                            <option value="2">02:00</option>
                            <option value="2.5">02:30</option>
                            <option value="3">03:00</option>
                            <option value="3.5">03:30</option>
                            <option value="4">04:00</option>
                            <option value="4.5">04:30</option>
                            <option value="5">05:00</option>
                            <option value="5.5">05:30</option>
                            <option value="6">06:00</option>
                            <option value="6.5">06:30</option>
                            <option value="7">07:00</option>
                            <option value="7.5">07:30</option>
                            <option value="8">08:00</option>
                            <option value="8.5">08:30</option>
                            <option value="9" selected="selected">09:00</option>
                            <option value="9.5">09:30</option>
                            <option value="10">10:00</option>
                            <option value="10.5">10:30</option>
                            <option value="11">11:00</option>
                            <option value="11.5">11:30</option>
                            <option value="12">12:00</option>
                            <option value="12.5">12:30</option>
                            <option value="13">13:00</option>
                            <option value="13.5">13:30</option>
                            <option value="14">14:00</option>
                            <option value="14.5">14:30</option>
                            <option value="15">15:00</option>
                            <option value="15.5">15:30</option>
                            <option value="16">16:00</option>
                            <option value="16.5">16:30</option>
                            <option value="17">17:00</option>
                            <option value="17.5">17:30</option>
                            <option value="18">18:00</option>
                            <option value="18.5">18:30</option>
                            <option value="19">19:00</option>
                            <option value="19.5">19:30</option>
                            <option value="20">20:00</option>
                            <option value="20.5">20:30</option>
                            <option value="21">21:00</option>
                            <option value="21.5">21:30</option>
                            <option value="22">22:00</option>
                            <option value="22.5">22:30</option>
                            <option value="23">23:00</option>
                            <option value="23.5">23:30</option>                        
                                              
                            	<option value="'.$_POST['pickup_time'].'" selected="selected">'.$_POST['pickup_time'].'</option>
                             </select>
      							
                </div>
                <div class="form_datum_modal"> 
                    <h5>'. DATUM2 .'</h5>
                    <input type="text" name="to_date" id="to_date_module" class="form-control" placeholder="To Date" value= "'.$_POST['to_date'].'" autocomplete="off"/> 
                    <select name="return_time" id="return_time_module" class="return-time time_modal" autocomplete="off"  required="on" >
                                                        <option value="0">00:00</option>
                            <option value="0.5">00:30</option>
                            <option value="1">01:00</option>
                            <option value="1.5">01:30</option>
                            <option value="2">02:00</option>
                            <option value="2.5">02:30</option>
                            <option value="3">03:00</option>
                            <option value="3.5">03:30</option>
                            <option value="4">04:00</option>
                            <option value="4.5">04:30</option>
                            <option value="5">05:00</option>
                            <option value="5.5">05:30</option>
                            <option value="6">06:00</option>
                            <option value="6.5">06:30</option>
                            <option value="7">07:00</option>
                            <option value="7.5">07:30</option>
                            <option value="8">08:00</option>
                            <option value="8.5">08:30</option>
                            <option value="9" selected="selected">09:00</option>
                            <option value="9.5">09:30</option>
                            <option value="10">10:00</option>
                            <option value="10.5">10:30</option>
                            <option value="11">11:00</option>
                            <option value="11.5">11:30</option>
                            <option value="12">12:00</option>
                            <option value="12.5">12:30</option>
                            <option value="13">13:00</option>
                            <option value="13.5">13:30</option>
                            <option value="14">14:00</option>
                            <option value="14.5">14:30</option>
                            <option value="15">15:00</option>
                            <option value="15.5">15:30</option>
                            <option value="16">16:00</option>
                            <option value="16.5">16:30</option>
                            <option value="17">17:00</option>
                            <option value="17.5">17:30</option>
                            <option value="18">18:00</option>
                            <option value="18.5">18:30</option>
                            <option value="19">19:00</option>
                            <option value="19.5">19:30</option>
                            <option value="20">20:00</option>
                            <option value="20.5">20:30</option>
                            <option value="21">21:00</option>
                            <option value="21.5">21:30</option>
                            <option value="22">22:00</option>
                            <option value="22.5">22:30</option>
                            <option value="23">23:00</option>
                            <option value="23.5">23:30</option>                        
                          
                            <option value="'.$_POST['return_time'].'" selected="selected">'.$_POST['return_time'].'</option>                    </select>
                </div>
                <div class="dodatci">
                    <h5>'. IZABERI .'</h5>
                    <div class="dodatci_wraper">
                        <div class="dodatak" >
                            <span>'. D4 .'</span><br>
                            <button type="button" id="button1" onclick="'. $toggle_active.'" class="btn_dodatak" value="unchek"></button>
                        </div>
                        <div>
                        <img src="img/borderDodatci.png">
                        </div>
                        <div class="dodatak"> 
                            <span>'. D1 .'</span><br>
                            <button type="button" id="button2" onclick="'. $toggle_active.'" class="btn_dodatak" value="unchek"></button>
                        </div>
                        <div>
                        <img src="img/borderDodatci.png">
                        </div>
                        <div class="dodatak"> 
                            <span>'. D2 .'</span><br>
                            <button type="button" id="button3"class="btn_dodatak" onclick="'. $toggle_active .'"  value="unchek"></button>
                        </div>
                        <div>
                        <img src="img/borderDodatci.png">
                        </div>
                        <div class="dodatak"> 
                            <span>'. D5 .'</span><br>
                            <button type="button" id="button4" onclick="'. $toggle_active.'" class="btn_dodatak" value="unchek"></button>
                        </div>
                        <div>
                        <img src="img/borderDodatci.png">
                        </div>
                        <div class="dodatak"> 
                            <span>'. D3 .'</span><br>
                            <button type="button" id="button5" onclick="'. $toggle_active.'" class="btn_dodatak" value="unchek"></button>
                        </div>
                    </div>
                </div>
        </div>
        <img class="borderForma" src="img/borderForma.png">
        <div class="form_right_reserev">
            <h3>'. KONTAKT .'<h3>

            <div class="info_section">
                <input type="text" name="Ime" id="ime" placeholder="'. FNAME .'" class="marginright"  required="on" value="'.$autoFname.'">
                <input type="text" name="Prezime" id="prezime" placeholder="'. LNAME .'"  required="on" value="'.$autoLname.'">
            </div>
            <div class="info_section">
                <input type="text" name="broj" id="brtel" placeholder="'. BRTEL .'" class="marginright" value="'.$autoPnum.'">
                <input type="email" name="email_modal" id="eposta" placeholder="'. EMAIL .'"  required="on" value="'.$autoEmail.'">
            </div>
            <div class="info_section">
                <input type="text" name="bdayy" id="rodjen" placeholder="'. RODJDAN .'"  class="marginright"  required="on" value="'.$autoBday.'">
                <input type="text" name="brojleta" id="let" placeholder="'. BROJLETA .'">
            </div>
            <div class="info_section">
                <textarea placeholder="'. KOMENTAR .'" id="komentar"></textarea>
            </div>
        
            <div class="next_section">
                <div class="ukopno_cena">
                <span id="depozzit">'.DEPOZIT.$depozit2.'€</span>
                    <input type="text" name="ukupno" id="ukupno" readonly value="'. UKUPNO1 .'">
                </div>
                <div class="agree_next">
                    <input type="checkbox" name="agree" id="" value="I agree" required="on" checked />
                    <div class="align_agree">'. PRIHVATAM .'</div>
                    <button type="button" class="next_btn" id="next_btn">'. NASTAVI_BTN .'</button>
                </div>
            </div>
        </div>';  
}

if ($_POST['action'] == "reserv_car") {
	$sendcarid = $_POST['sendcarid'];
 // send to modal 
echo '
        <div class="form_left_reserev">
            <h3>'.RESERV_BTN.'</h3>
            <select class="select_car_module" id="select_car_module">';
         $carsreserv = "SELECT * FROM cars";
         $cars_reserv = mysqli_query($db, $carsreserv);
            while($rows=mysqli_fetch_assoc($cars_reserv)){



              $carid = $rows['carid'];      
                 if ($rows['name'] == 'skodago') { 
                 	if ($rows['carid'] == $sendcarid) {
            			$skodago = "selected = 'selected'";
            		}else{
						$skodago = "";
            		}
                      echo '  <option value="'.$rows['carid'].'" '. $skodago .'>
                             '.SKODAGO.' </option>';
                }elseif($rows['name'] == 'up') { 
                	if ($rows['carid'] == $sendcarid) {
            			$up = "selected = 'selected'";
            		}else{
						$up = "";
            		}
                      echo '  <option value="'.$rows['carid'].'" '. $up .'>
                             '.UP.' </option>';
                }elseif($rows['name'] == 'fabia') { 
                	if ($rows['carid'] == $sendcarid) {
            			$fabia = "selected = 'selected'";
            		}else{
						$fabia = "";
            		}
                      echo '  <option value="'.$rows['carid'].'" '. $fabia .'>
                             '.FABIA.' </option>';
                }elseif($rows['name'] == 'fiesta') { 
                	if ($rows['carid'] == $sendcarid) {
            			$fiesta = "selected = 'selected'";
            		}else{
						$fiesta = "";
            		}
                      echo '  <option value="'.$rows['carid'].'" '. $fiesta .'>
                             '.FIESTA.' </option>';             
                }elseif($rows['name'] == 'yaris') {
                if ($rows['carid'] == $sendcarid) {
            			$yaris = "selected = 'selected'";
            		}else{
						$yaris = "";
            		} 
                      echo '  <option value="'.$rows['carid'].'" '. $yaris .'>
                             '.YARIS.' </option>';             
                }elseif($rows['name'] == 'astra') {
                if ($rows['carid'] == $sendcarid) {
            			$astra = "selected = 'selected'";
            		}else{
						$astra = "";
            		} 
                      echo '  <option value="'.$rows['carid'].'" '. $astra .'>
                             '.ASTRA.' </option>';             
                }elseif($rows['name'] == 'logan') {
                if ($rows['carid'] == $sendcarid) {
            			$logan = "selected = 'selected'";
            		}else{
						$logan = "";
            		} 
                      echo '  <option value="'.$rows['carid'].'" '. $logan .'>
                             '.LOGAN.' </option>';	             
                }elseif($rows['name'] == 'focus') {
                if ($rows['carid'] == $sendcarid) {
            			$focus = "selected = 'selected'";
            		}else{
						$focus = "";
            		} 
                      echo '  <option value="'.$rows['carid'].'" '. $focus .'>
                             '.FOCUS.' </option>';     
                }elseif($rows['name'] == 'fluence') {
                if ($rows['carid'] == $sendcarid) {
            			$fluence = "selected = 'selected'";
            		}else{
						$fluence = "";
            		} 
                      echo '  <option value="'.$rows['carid'].'" '. $fluence .'>
                             '.FLUENCE.' </option>';
                }elseif($rows['name'] == 'tipo') {
                if ($rows['carid'] == $sendcarid) {
            			$tipo = "selected = 'selected'";
            		}else{
						$tipo = "";
            		} 
                      echo '  <option value="'.$rows['carid'].'" '. $tipo .'>
                             '.TIPO.' </option>';
                }elseif($rows['name'] == 'octavia') {
                if ($rows['carid'] == $sendcarid) {
            			$octavia = "selected = 'selected'";
            		}else{
						$octavia = "";
            		} 
                      echo '  <option value="'.$rows['carid'].'" '. $octavia .'>
                             '.OCTAVIA.' </option>';
                }elseif($rows['name'] == 'opelastra') {
                if ($rows['carid'] == $sendcarid) {
            			$opelastra = "selected = 'selected'";
            		}else{
						$opelastra = "";
            		} 


                      echo '  <option value="'.$rows['carid'].'" '. $opelastra .'>
                             '.OPELASTRA.' </option>';        
 }}
 $toggle_active = "this.classList.toggle('active')";
   echo '  </select>
            
                <h5>'.MESTO1 .'</h5>
           
            <select class="select_place_module" id="select_place_module"  onclick="select_input()"  required="on">
                  <option value="" selected="selected">'. FORM_SELECT .'</option>
                  <option value="1" >'.FORM_SELECT1 .'</option>
                  <option value="2" >'.FORM_SELECT2 .'</option>
                  <option value="3" id="option_place_input1">'.FORM_SELECT3 .'</option>
                  <input type="text" class="input_place_module" id="input_place_module"  placeholder="'.FORM_SELECT4 .'">
            </select>
            
                <h5>'.MESTO2 .'</h5>
            
            <select class="select_place_module" id="select_place_module2" onclick="select_input2()"  required="on" >
                  <option value="" selected="selected">'.FORM_SELECT.'</option>
                  <option value="1" >'. FORM_SELECT1 .'</option>
                  <option value="2" >'. FORM_SELECT2 .'</option>
                  <option value="3" id="option_place_input2">'.FORM_SELECT3 .'</option>
                  <input type="text" class="input_place_module" id="input_place_module2"  placeholder="'.FORM_SELECT4 .'">
            </select> <br/>

                <div class="form_datum_modal">      
                    <h5>'.DATUM1.'</h5>
                    <input type="text" name="from_date" id="from_date_module" class="form-control" placeholder="From Date" autocomplete="off"  required="on" />    
                    <select name="pickup_time" id="pickup_time" class="pickup-time time_modal" autocomplete="off"  required="on" >
                                                        <option value="0">00:00</option>
                            <option value="0.5">00:30</option>
                            <option value="1">01:00</option>
                            <option value="1.5">01:30</option>
                            <option value="2">02:00</option>
                            <option value="2.5">02:30</option>
                            <option value="3">03:00</option>
                            <option value="3.5">03:30</option>
                            <option value="4">04:00</option>
                            <option value="4.5">04:30</option>
                            <option value="5">05:00</option>
                            <option value="5.5">05:30</option>
                            <option value="6">06:00</option>
                            <option value="6.5">06:30</option>
                            <option value="7">07:00</option>
                            <option value="7.5">07:30</option>
                            <option value="8">08:00</option>
                            <option value="8.5">08:30</option>
                            <option value="9" selected="selected">09:00</option>
                            <option value="9.5">09:30</option>
                            <option value="10">10:00</option>
                            <option value="10.5">10:30</option>
                            <option value="11">11:00</option>
                            <option value="11.5">11:30</option>
                            <option value="12">12:00</option>
                            <option value="12.5">12:30</option>
                            <option value="13">13:00</option>
                            <option value="13.5">13:30</option>
                            <option value="14">14:00</option>
                            <option value="14.5">14:30</option>
                            <option value="15">15:00</option>
                            <option value="15.5">15:30</option>
                            <option value="16">16:00</option>
                            <option value="16.5">16:30</option>
                            <option value="17">17:00</option>
                            <option value="17.5">17:30</option>
                            <option value="18">18:00</option>
                            <option value="18.5">18:30</option>
                            <option value="19">19:00</option>
                            <option value="19.5">19:30</option>
                            <option value="20">20:00</option>
                            <option value="20.5">20:30</option>
                            <option value="21">21:00</option>
                            <option value="21.5">21:30</option>
                            <option value="22">22:00</option>
                            <option value="22.5">22:30</option>
                            <option value="23">23:00</option>
                            <option value="23.5">23:30</option>                        
                          </select>
      
                </div>
                <div class="form_datum_modal"> 
                    <h5>'.DATUM2.'</h5>
                    <input type="text" name="to_date" id="to_date_module" class="form-control" placeholder="To Date" autocomplete="off"  required="on" /> 
                    <select name="return_time" id="return_time" class="return-time time_modal" autocomplete="off"  required="on" >
                                                        <option value="0">00:00</option>
                            <option value="0.5">00:30</option>
                            <option value="1">01:00</option>
                            <option value="1.5">01:30</option>
                            <option value="2">02:00</option>
                            <option value="2.5">02:30</option>
                            <option value="3">03:00</option>
                            <option value="3.5">03:30</option>
                            <option value="4">04:00</option>
                            <option value="4.5">04:30</option>
                            <option value="5">05:00</option>
                            <option value="5.5">05:30</option>
                            <option value="6">06:00</option>
                            <option value="6.5">06:30</option>
                            <option value="7">07:00</option>
                            <option value="7.5">07:30</option>
                            <option value="8">08:00</option>
                            <option value="8.5">08:30</option>
                            <option value="9" selected="selected">09:00</option>
                            <option value="9.5">09:30</option>
                            <option value="10">10:00</option>
                            <option value="10.5">10:30</option>
                            <option value="11">11:00</option>
                            <option value="11.5">11:30</option>
                            <option value="12">12:00</option>
                            <option value="12.5">12:30</option>
                            <option value="13">13:00</option>
                            <option value="13.5">13:30</option>
                            <option value="14">14:00</option>
                            <option value="14.5">14:30</option>
                            <option value="15">15:00</option>
                            <option value="15.5">15:30</option>
                            <option value="16">16:00</option>
                            <option value="16.5">16:30</option>
                            <option value="17">17:00</option>
                            <option value="17.5">17:30</option>
                            <option value="18">18:00</option>
                            <option value="18.5">18:30</option>
                            <option value="19">19:00</option>
                            <option value="19.5">19:30</option>
                            <option value="20">20:00</option>
                            <option value="20.5">20:30</option>
                            <option value="21">21:00</option>
                            <option value="21.5">21:30</option>
                            <option value="22">22:00</option>
                            <option value="22.5">22:30</option>
                            <option value="23">23:00</option>
                            <option value="23.5">23:30</option>                        
                          </select>
                </div>
                <div class="dodatci">
                    <h5>'. IZABERI .'</h5>
                    <div class="dodatci_wraper">
                        <div class="dodatak" >
                            <span>'. D4 .'</span><br>
                            <button type="button" id="button1" onclick="'. $toggle_active.'" class="btn_dodatak" value="unchek"></button>
                        </div>
                        <div>
                        <img src="img/borderDodatci.png">
                        </div>
                        <div class="dodatak"> 
                            <span>'. D1 .'</span><br>
                            <button type="button" id="button2" onclick="'. $toggle_active.'" class="btn_dodatak" value="unchek"></button>
                        </div>
                        <div>
                        <img src="img/borderDodatci.png">
                        </div>
                        <div class="dodatak"> 
                            <span>'. D2 .'</span><br>
                            <button type="button" id="button3"class="btn_dodatak" onclick="'. $toggle_active .'"  value="unchek"></button>
                        </div>
                        <div>
                        <img src="img/borderDodatci.png">
                        </div>
                        <div class="dodatak"> 
                            <span>'. D5 .'</span><br>
                            <button type="button" id="button4" onclick="'. $toggle_active.'" class="btn_dodatak" value="unchek"></button>
                        </div>
                        <div>
                        <img src="img/borderDodatci.png">
                        </div>
                        <div class="dodatak"> 
                            <span>'. D3 .'</span><br>
                            <button type="button" id="button5" onclick="'. $toggle_active.'" class="btn_dodatak" value="unchek"></button>
                        </div>
                    </div>
                </div>
        </div>
        <img class="borderForma" src="img/borderForma.png">
        <div class="form_right_reserev">
            <h3>'. KONTAKT .'<h3>

            <div class="info_section">
                <input type="text" name="Ime" id="ime" placeholder="'. FNAME .'" class="marginright"  required="on" value="'.$autoFname.'">
                <input type="text" name="Prezime" id="prezime" placeholder="'. LNAME .'"  required="on" value="'.$autoLname.'">
            </div>
            <div class="info_section">
                <input type="text" name="broj" id="brtel" placeholder="'. BRTEL .'" class="marginright" value="'.$autoPnum.'">
                <input type="email" name="email_modal" id="eposta" placeholder="'. EMAIL .'"  required="on" value="'.$autoEmail.'">
            </div>
            <div class="info_section">
                <input type="text" name="bdayy" id="rodjen" placeholder="'. RODJDAN .'"  class="marginright"  required="on" value="'.$autoBday.'">
                <input type="text" name="brojleta" id="let" placeholder="'. BROJLETA .'">
            </div>
            <div class="info_section">
                <textarea placeholder="'. KOMENTAR .'" id="komentar"></textarea>
            </div>
        
            <div class="next_section">
                <div class="ukopno_cena">

                    <span id="depozzit">'.DEPOZIT.$depozit2.'€</span>
                    <input type="text" name="ukupno" id="ukupno" readonly value="'. UKUPNO1 .'">
                </div>
                <div class="agree_next">
                    <input type="checkbox" name="agree" id="" value="I agree" required="on" checked />
                    <div class="align_agree">'. PRIHVATAM .'</div>
                    <button type="button" class="next_btn" id="next_btn">'. NASTAVI_BTN .'</button>
                </div>
            </div>
        </div>';
}
if ($_POST['action'] == "iznos") {
	$car = $_POST['car'];
	$daysDiff =  $_POST['daysDiff'];
	$check = "chek";	
	$plusgps = "0";
	$pluspsiguranje = "0";
	$plussediste = "0";
	$pluskarton = "0";
	$pluslanci = "0";
	$iznos = "x";
		$carsreservprice = "SELECT * FROM price WHERE carid='$car'";
        $cars_price = mysqli_query($db, $carsreservprice);
            while($rows=mysqli_fetch_assoc($cars_price)){ 

            	if ($daysDiff == 1) {
            		$iznos = $daysDiff * $rows['1d'];
            	}
            	elseif (1 < $daysDiff and $daysDiff < 6) {
            		$iznos = $daysDiff * $rows['2d5d'];
            	}
            	elseif (5 < $daysDiff and $daysDiff < 11) {
            		$iznos = $daysDiff * $rows['6d10d'];
            	}
            	elseif (10 < $daysDiff and $daysDiff < 16) {
            		$iznos = $daysDiff * $rows['11d15d'];
            	}
            	elseif (15 < $daysDiff) {
            		$iznos = $daysDiff * $rows['16d'];
            	}
			} 
			    if (is_numeric($daysDiff)) {
				    if ($_POST['gpsVal'] == $check) {
	            		$plusgps = $daysDiff * 3;
	            	}
	            	if ($_POST['osiguranjeVal'] == $check) {
	            		$pluspsiguranje = $daysDiff * 5;
	            	}
	            	if ($_POST['sedisteVal'] == $check) {
	            		$plussediste = $daysDiff * 3;
	            	}
	            	if ($_POST['kartaVal'] == $check) {
	            		$pluskarton = 20;
	            	}
	            	if ($_POST['lanciVal'] == $check) {
	            		$pluslanci = $daysDiff * 2;
	            	}
	            		$ukupno = $iznos + $plusgps + $pluspsiguranje + $plussediste + $pluskarton + $pluslanci;
	            		$ukupno = $ukupno;
	            		echo UKUPNO2.$ukupno."€"; 
            	}else{
            		echo UKUPNO1; 
            	}

}
if ($_POST['action'] == "depozit") {
  $car = $_POST['car'];
  $check = "chek";  
  $iznos = "x";
  $oguranje = '';
      $carNaziv = "SELECT * FROM cars WHERE carid='$car'";
        $car_Naziv = mysqli_query($db, $carNaziv);
            while($rows=mysqli_fetch_assoc($car_Naziv)){ 
              if ($rows['name'] == 'skodago') {
                $nazivAutomobila = SKODAGO;
              }elseif ($rows['name'] == 'up') {
                $nazivAutomobila = UP;
              }elseif ($rows['name'] == 'fabia') {
                $nazivAutomobila = FABIA;
              }elseif ($rows['name'] == 'fiesta') {
                $nazivAutomobila = FIESTA;
              }elseif ($rows['name'] == 'yaris') {
                $nazivAutomobila = YARIS;
              }elseif ($rows['name'] == 'astra') {
                $nazivAutomobila = ASTRA;
              }elseif ($rows['name'] == 'logan') {
                $nazivAutomobila = LOGAN;
              }elseif ($rows['name'] == 'focus') {
                $nazivAutomobila = FOCUS;
              }elseif ($rows['name'] == 'fluence') {
                $nazivAutomobila = FLUENCE;
              }elseif ($rows['name'] == 'tipo') {
                $nazivAutomobila = TIPO;
              }elseif ($rows['name'] == 'octavia') {
                $nazivAutomobila = OCTAVIA;
              }elseif ($rows['name'] == 'opelastra') {
                $nazivAutomobila = OPELASTRA;
              }
          } 

          if ($_POST['osiguranjeVal'] == $check) {
              $oguranje = DO1;
          }
             $depozit2 = '400';
          if ($oguranje == DO1) {
            $depozit2 = '100';
          }elseif ($nazivAutomobila == SKODAGO) {
            $depozit2 = '200';
          }elseif ($nazivAutomobila == UP) {
            $depozit2 = '200';
          }elseif ($nazivAutomobila == FABIA) {
            $depozit2 = '300';
          }elseif ($nazivAutomobila == YARIS) {
            $depozit2 = '300';
          }      
          echo DEPOZIT.$depozit2.'€';      
 

}
if ($_POST['action'] == "dalje") {
	$car = $_POST['car'];
	$daysDiff =  $_POST['daysDiff'];
	$check = "chek";	
	$plusgps = "0";
	$pluspsoguranje = "0";
	$plussediste = "0";
	$pluskarton = "0";
	$pluslanci = "0";
	$iznos = "x";

	
	$mestopPreuzimanja = $_POST['mestopPreuzimanja'];
	$mestopVracanja = $_POST['mestopVracanja'];
  if ($mestopPreuzimanja == "1") {
    $mesto1 = FORM_SELECT11;
  }elseif ($mestopPreuzimanja == "2") {
    $mesto1 = FORM_SELECT22;
  }elseif ($mestopPreuzimanja == "3") {
    $mesto1 = $_POST['place_input1'];
  }

  if ($mestopVracanja == "1") {
    $mesto2 = FORM_SELECT11;
  }elseif ($mestopVracanja == "2") {
    $mesto2 = FORM_SELECT22;
  }elseif ($mestopVracanja == "3") {
    $mesto2 = $_POST['place_input2'];
  }
	$datumPreuzimanja = date_create($_POST['datumPreuzimanja']);
	$datumVracanja = date_create($_POST['datumVracanja']);
	$vremePreuzimanja = $_POST['vremePreuzimanja'];
  if ($vremePreuzimanja == '0') {
    $vremePreuzimanja = '00:00';
  }elseif ($vremePreuzimanja == '0.5') {
    $vremePreuzimanja = '00:30';
  }elseif ($vremePreuzimanja == '1') {
    $vremePreuzimanja = '01:00';
  }elseif ($vremePreuzimanja == '1.5') {
    $vremePreuzimanja = '01:30';
  }elseif ($vremePreuzimanja == '2') {
    $vremePreuzimanja = '02:00';
  }elseif ($vremePreuzimanja == '2.5') {
    $vremePreuzimanja = '02:30';
  }elseif ($vremePreuzimanja ==  '3') {
    $vremePreuzimanja = '03:00';
  }elseif ($vremePreuzimanja == '3.5') {
    $vremePreuzimanja = '03:30';
  }elseif ($vremePreuzimanja == '4') {
    $vremePreuzimanja = '04:00';
  }elseif ($vremePreuzimanja == '4.5') {
    $vremePreuzimanja = '04:30';
  }elseif ($vremePreuzimanja == '5') {
    $vremePreuzimanja = '05:00';
  }elseif ($vremePreuzimanja == '5.5') {
    $vremePreuzimanja = '05:30';
  }elseif ($vremePreuzimanja == '6.') {
    $vremePreuzimanja = '06:00';
  }elseif ($vremePreuzimanja == '6.5') {
    $vremePreuzimanja = '06:30';
  }elseif ($vremePreuzimanja == '7') {
    $vremePreuzimanja = '07:00';
  }elseif ($vremePreuzimanja == '7.5') {
    $vremePreuzimanja = '07:30';
  }elseif ($vremePreuzimanja == '8') {
    $vremePreuzimanja = '08:00';
  }elseif ($vremePreuzimanja == '8.5') {
    $vremePreuzimanja = '08:30';
  }elseif ($vremePreuzimanja == '9') {
    $vremePreuzimanja = '09:00';
  }elseif ($vremePreuzimanja == '9.5') {
    $vremePreuzimanja = '09:30';
  }elseif ($vremePreuzimanja == '10') {
    $vremePreuzimanja = '10:00';
  }elseif ($vremePreuzimanja == '10.5') {
    $vremePreuzimanja = '10:30';
  }elseif ($vremePreuzimanja == '11') {
    $vremePreuzimanja = '11:00';
  }elseif ($vremePreuzimanja == '11.5') {
    $vremePreuzimanja = '11:30';
  }elseif ($vremePreuzimanja == '12') {
    $vremePreuzimanja = '12:00';
  }elseif ($vremePreuzimanja == '12.5') {
    $vremePreuzimanja = '12:30';
  }elseif ($vremePreuzimanja == '13') {
    $vremePreuzimanja = '13:00';
  }elseif ($vremePreuzimanja == '13.5') {
    $vremePreuzimanja = '13:30';
  }elseif ($vremePreuzimanja == '14') {
    $vremePreuzimanja = '14:00';
  }elseif ($vremePreuzimanja == '14.5') {
    $vremePreuzimanja = '14:30';
  }elseif ($vremePreuzimanja == '15') {
    $vremePreuzimanja = '15:00';
  }elseif ($vremePreuzimanja == '15.5') {
    $vremePreuzimanja = '15:30';
  }elseif ($vremePreuzimanja == '16') {
    $vremePreuzimanja = '16:00';
  }elseif ($vremePreuzimanja == '16.5') {
    $vremePreuzimanja = '16:30';
  }elseif ($vremePreuzimanja == '17') {
    $vremePreuzimanja = '17:00';
  }elseif ($vremePreuzimanja == '17.5') {
    $vremePreuzimanja = '17:30';
  }elseif ($vremePreuzimanja == '18') {
    $vremePreuzimanja = '18:00';
  }elseif ($vremePreuzimanja == '18.5') {
    $vremePreuzimanja = '18:30';
  }elseif ($vremePreuzimanja == '19') {
    $vremePreuzimanja = '19:00';
  }elseif ($vremePreuzimanja == '19.5') {
    $vremePreuzimanja = '19:30';
  }elseif ($vremePreuzimanja == '20') {
    $vremePreuzimanja = '20:00';
  }elseif ($vremePreuzimanja == '20.5') {
    $vremePreuzimanja = '20:30';
  }elseif ($vremePreuzimanja == '21') {
    $vremePreuzimanja = '21:00';
  }elseif ($vremePreuzimanja == '21.5') {
    $vremePreuzimanja = '21:30';
  }elseif ($vremePreuzimanja == '22') {
    $vremePreuzimanja = '22:00';
  }elseif ($vremePreuzimanja == '22.5') {
    $vremePreuzimanja = '22:30';
  }elseif ($vremePreuzimanja == '23') {
    $vremePreuzimanja = '23:00';
  }elseif ($vremePreuzimanja == '23.5') {
    $vremePreuzimanja = '23:30';
  }
	$vremeVracanja = $_POST['vremeVracanja'];
  if ($vremeVracanja == '0') {
    $vremeVracanja = '00:00';
  }elseif ($vremeVracanja == '0.5') {
    $vremeVracanja = '00:30';
  }elseif ($vremeVracanja == '1') {
    $vremeVracanja = '01:00';
  }elseif ($vremeVracanja == '1.5') {
    $vremeVracanja = '01:30';
  }elseif ($vremeVracanja == '2') {
    $vremeVracanja = '02:00';
  }elseif ($vremeVracanja == '2.5') {
    $vremeVracanja = '02:30';
  }elseif ($vremeVracanja == '3') {
    $vremeVracanja = '03:00';
  }elseif ($vremeVracanja == '3.5') {
    $vremeVracanja = '03:30';
  }elseif ($vremeVracanja == '4') {
    $vremeVracanja = '04:00';
  }elseif ($vremeVracanja == '4.5') {
    $vremeVracanja = '04:30';
  }elseif ($vremeVracanja == '5') {
    $vremeVracanja = '05:00';
  }elseif ($vremeVracanja == '5.5') {
    $vremeVracanja = '05:30';
  }elseif ($vremeVracanja == '6.') {
    $vremeVracanja = '06:00';
  }elseif ($vremeVracanja == '6.5') {
    $vremeVracanja = '06:30';
  }elseif ($vremeVracanja == '7') {
    $vremeVracanja = '07:00';
  }elseif ($vremeVracanja == '7.5') {
    $vremeVracanja = '07:30';
  }elseif ($vremeVracanja == '8') {
    $vremeVracanja = '08:00';
  }elseif ($vremeVracanja == '8.5') {
    $vremeVracanja = '08:30';
  }elseif ($vremeVracanja == '9') {
    $vremeVracanja = '09:00';
  }elseif ($vremeVracanja == '9.5') {
    $vremeVracanja = '09:30';
  }elseif ($vremeVracanja == '10') {
    $vremeVracanja = '10:00';
  }elseif ($vremeVracanja == '10.5') {
    $vremeVracanja = '10:30';
  }elseif ($vremeVracanja == '11') {
    $vremeVracanja = '11:00';
  }elseif ($vremeVracanja == '11.5') {
    $vremeVracanja = '11:30';
  }elseif ($vremeVracanja == '12') {
    $vremeVracanja = '12:00';
  }elseif ($vremeVracanja == '12.5') {
    $vremeVracanja = '12:30';
  }elseif ($vremeVracanja == '13') {
    $vremeVracanja = '13:00';
  }elseif ($vremeVracanja == '13.5') {
    $vremeVracanja = '13:30';
  }elseif ($vremeVracanja == '14') {
    $vremeVracanja = '14:00';
  }elseif ($vremeVracanja == '14.5') {
    $vremeVracanja = '14:30';
  }elseif ($vremeVracanja == '15') {
    $vremeVracanja = '15:00';
  }elseif ($vremeVracanja == '15.5') {
    $vremeVracanja = '15:30';
  }elseif ($vremeVracanja == '16') {
    $vremeVracanja = '16:00';
  }elseif ($vremeVracanja == '16.5') {
    $vremeVracanja = '16:30';
  }elseif ($vremeVracanja == '17') {
    $vremeVracanja = '17:00';
  }elseif ($vremeVracanja == '17.5') {
    $vremeVracanja = '17:30';
  }elseif ($vremeVracanja == '18') {
    $vremeVracanja = '18:00';
  }elseif ($vremeVracanja == '18.5') {
    $vremeVracanja = '18:30';
  }elseif ($vremeVracanja == '19') {
    $vremeVracanja = '19:00';
  }elseif ($vremeVracanja == '19.5') {
    $vremeVracanja = '19:30';
  }elseif ($vremeVracanja == '20') {
    $vremeVracanja = '20:00';
  }elseif ($vremeVracanja == '20.5') {
    $vremeVracanja = '20:30';
  }elseif ($vremeVracanja == '21') {
    $vremeVracanja = '21:00';
  }elseif ($vremeVracanja == '21.5') {
    $vremeVracanja = '21:30';
  }elseif ($vremeVracanja == '22') {
    $vremeVracanja = '22:00';
  }elseif ($vremeVracanja == '22.5') {
    $vremeVracanja = '22:30';
  }elseif ($vremeVracanja == '23') {
    $vremeVracanja = '23:00';
  }elseif ($vremeVracanja == '23.5') {
    $vremeVracanja = '23:30';
  }
	$ime =  $_POST['ime'];
	$prezime =  $_POST['prezime'];
	$brtel =  $_POST['brtel'];
	$email =  $_POST['email'];
	$rodjen =  $_POST['rodjen'];
	$let = "";
	if ($_POST['let'] !== "") {
		$let = '
			<div class="li_right">
    				<label>'.BROJLETA2.'</label>
    				<p>'.$_POST['let'].'</p>
    		</div>
		';
	}

	$gps = "";
	$oguranje = "";
	$sediste = "";
	$karton = "";
	$lanci = "";
		$carsreservprice = "SELECT * FROM price WHERE carid='$car'";
        $cars_price = mysqli_query($db, $carsreservprice);
            while($rows=mysqli_fetch_assoc($cars_price)){ 

            	if ($daysDiff == 1) {
            		$iznos = $daysDiff * $rows['1d'];
            	}
            	elseif (1 < $daysDiff and $daysDiff < 6) {
            		$iznos = $daysDiff * $rows['2d5d'];
            	}
            	elseif (5 < $daysDiff and $daysDiff < 11) {
            		$iznos = $daysDiff * $rows['6d10d'];
            	}
            	elseif (10 < $daysDiff and $daysDiff < 16) {
            		$iznos = $daysDiff * $rows['11d15d'];
            	}
            	elseif (15 < $daysDiff) {
            		$iznos = $daysDiff * $rows['16d'];
            	}
            }
            	if (is_numeric($daysDiff)) {
	            	if ($_POST['gpsVal'] == $check) {
	            		$plusgps = $daysDiff * 3;
	            		$gps = DO4;
	            	}
	            	if ($_POST['osiguranjeVal'] == $check) {
	            		$pluspsoguranje = $daysDiff * 5;
	            		$oguranje = DO1;
	            	}
	            	if ($_POST['sedisteVal'] == $check) {
	            		$plussediste = $daysDiff * 3;
	            		$sediste = DO2;
	            	}
	            	if ($_POST['kartaVal'] == $check) {
	            		$pluskarton = 20;
	            		$karton = DO5;
	            	}
	            	if ($_POST['lanciVal'] == $check) {
	            		$pluslanci = $daysDiff * 2;
						      $lanci = DO3;
	            	}
	            		$ukupno = $iznos + $plusgps + $pluspsoguranje + $plussediste + $pluskarton + $pluslanci;
	            		$ukupno = $ukupno;
	            		$ukupnozadodatke = $plusgps + $pluspsoguranje + $plussediste + $pluskarton + $pluslanci;
	            		$ukupnozadodatke = $ukupnozadodatke;
	            		$ukupaniznos = UKUPNO2.$ukupno."€"; 
	            		$iznos = $iznos;
            	}else{
            		$ukupaniznos = UKUPNO1; 
            	}
        $cairimg = "SELECT * FROM img WHERE carid = '$car' LIMIT 1" ;
            $cairimg_result = mysqli_query($db, $cairimg);
            while($rowsimg=mysqli_fetch_assoc($cairimg_result)) { 
            	$slikaAutomobila =  $rowsimg['img'];
            }
        $carNaziv = "SELECT * FROM cars WHERE carid='$car'";
        $car_Naziv = mysqli_query($db, $carNaziv);
            while($rows=mysqli_fetch_assoc($car_Naziv)){ 
            	if ($rows['name'] == 'skodago') {
	              $nazivAutomobila = SKODAGO;
	            }elseif ($rows['name'] == 'up') {
	              $nazivAutomobila = UP;
	            }elseif ($rows['name'] == 'fabia') {
	              $nazivAutomobila = FABIA;
	            }elseif ($rows['name'] == 'fiesta') {
	              $nazivAutomobila = FIESTA;
	            }elseif ($rows['name'] == 'yaris') {
	              $nazivAutomobila = YARIS;
	            }elseif ($rows['name'] == 'astra') {
	              $nazivAutomobila = ASTRA;
	            }elseif ($rows['name'] == 'logan') {
	              $nazivAutomobila = LOGAN;
	            }elseif ($rows['name'] == 'focus') {
	              $nazivAutomobila = FOCUS;
	            }elseif ($rows['name'] == 'fluence') {
	              $nazivAutomobila = FLUENCE;
	            }elseif ($rows['name'] == 'tipo') {
	              $nazivAutomobila = TIPO;
	            }elseif ($rows['name'] == 'octavia') {
	              $nazivAutomobila = OCTAVIA;
	            }elseif ($rows['name'] == 'opelastra') {
	              $nazivAutomobila = OPELASTRA;
	            }
        	}

          $depozit2 = '400';
          if ($oguranje == DO1) {
            $depozit2 = '100';
          }elseif ($nazivAutomobila == SKODAGO) {
            $depozit2 = '200';
          }elseif ($nazivAutomobila == UP) {
            $depozit2 = '200';
          }elseif ($nazivAutomobila == FABIA) {
            $depozit2 = '300';
          }elseif ($nazivAutomobila == YARIS) {
            $depozit2 = '300';
          }

	echo '
		    	<div class="next_module_leftside">
    		<div class="left">
    			<div class="li_left">
    				<label>'.MESTO11.'</label>
    				<p>'.$mesto1.'</p>
    			</div>
    			<div class="li_left">
    				<label>'.MESTO22.'</label>
    				<p>'.$mesto2.'</p>
    			</div>    			
    			 <div class="li_left">
    				<label>'.DIV1.'</label>
    				<p>'.date_format($datumPreuzimanja,"d/m/Y").'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$vremePreuzimanja.'</p>
    			</div>
    			<div class="li_left">
    				<label>'.DIV2.'</label>
    				<p>'.date_format($datumVracanja,"d/m/Y").'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$vremeVracanja.'</p>
    			</div>
    			<div class="li_left">
    				<label>'.DODATCI.'</label>
    				<p>'.$gps.$oguranje.$sediste.$karton.$lanci.'</p>
    			</div>
    			<button class="next_btn" id="back_btn">'.NAZAD_BTN.'</button>
    		</div>
    		<div class="right">
    			<p>'.BROJDANA.$daysDiff.'</p>
    			<p>'.UKUPNO4.$ukupnozadodatke.'€</p>
    			<p>'.UKUPNO5.$iznos.'€</p>
    			<p>'.DEPOZIT.$depozit2.'€</p>	
    			<span>
    				'.URACUNATO.'
    			</span>
    			<div class="car_img">
    				<img class="img_left_car" src="'.$slikaAutomobila.'" width="260px">
    				<h4>'.$nazivAutomobila.'</h4>
    			</div>
    		</div>
    	</div>
       <img class="img_borderForma" src="img/borderForma.png">
       <div class="next_module_rightside">
       		    <div class="li_right">
    				<label>'.FNAME.'</label>
    				<p>'.$ime.'</p>
    			</div>    			
    			 <div class="li_right">
    				<label>'.LNAME.'</label>
    				<p>'.$prezime.'</p>
    			</div>
    			<div class="li_right">
    				<label>'.BRTEL.'</label>
    				<p>'.$brtel.'</p>
    			</div>
    			<div class="li_right">
    				<label>'.EMAIL.'</label>
    				<p>'.$email.'</p>
    			</div>
    			<div class="li_right">
    				<label>'.RODJDAN.'</label>
    				<p>'.$rodjen.'</p>
    			</div>
    			'.$let.'
    			
    				<span>'.DEPOZIT.$depozit2.'€</span>
    				<input type="text" name="" readonly value="'.$ukupaniznos.'">
    				<button  class="next_btn" id="rezervisi">'.REZERVISI_BTN.'</button>
    			
       </div>
	';
}
if ($_POST['action'] == "send") {






	$car = $_POST['car'];
	$daysDiff =  $_POST['daysDiff'];
	$check = "chek";	
	$plusgps = "0";
	$pluspsoguranje = "0";
	$plussediste = "0";
	$pluskarton = "0";
	$pluslanci = "0";
	$iznos = "x";


	$mestopPreuzimanja = $_POST['mestopPreuzimanja'];
	$mestopVracanja = $_POST['mestopVracanja'];

  if ($mestopPreuzimanja == "1") {
    $mesto1 = 'Aerodrom Nikola Tesla';
  }elseif ($mestopPreuzimanja == "2") {
    $mesto1 = 'Hotel Slavija';
  }elseif ($mestopPreuzimanja == "3") {
    $mesto1 = $_POST['place_input1'];
  }

  if ($mestopVracanja == "1") {
    $mesto2 = 'Aerodrom Nikola Tesla';
  }elseif ($mestopVracanja == "2") {
    $mesto2 = 'Hotel Slavija';
  }elseif ($mestopVracanja == "3") {
    $mesto2 = $_POST['place_input2'];
  }
  $datumPreuzimanja = date_create($_POST['datumPreuzimanja']);
  $datumVracanja = date_create($_POST['datumVracanja']);
    $vremePreuzimanja = $_POST['vremePreuzimanja'];
  if ($vremePreuzimanja == '0') {
    $vremePreuzimanja = '00:00';
  }elseif ($vremePreuzimanja == '0.5') {
    $vremePreuzimanja = '00:30';
  }elseif ($vremePreuzimanja == '1') {
    $vremePreuzimanja = '01:00';
  }elseif ($vremePreuzimanja == '1.5') {
    $vremePreuzimanja = '01:30';
  }elseif ($vremePreuzimanja == '2') {
    $vremePreuzimanja = '02:00';
  }elseif ($vremePreuzimanja == '2.5') {
    $vremePreuzimanja = '02:30';
  }elseif ($vremePreuzimanja ==  '3') {
    $vremePreuzimanja = '03:00';
  }elseif ($vremePreuzimanja == '3.5') {
    $vremePreuzimanja = '03:30';
  }elseif ($vremePreuzimanja == '4') {
    $vremePreuzimanja = '04:00';
  }elseif ($vremePreuzimanja == '4.5') {
    $vremePreuzimanja = '04:30';
  }elseif ($vremePreuzimanja == '5') {
    $vremePreuzimanja = '05:00';
  }elseif ($vremePreuzimanja == '5.5') {
    $vremePreuzimanja = '05:30';
  }elseif ($vremePreuzimanja == '6.') {
    $vremePreuzimanja = '06:00';
  }elseif ($vremePreuzimanja == '6.5') {
    $vremePreuzimanja = '06:30';
  }elseif ($vremePreuzimanja == '7') {
    $vremePreuzimanja = '07:00';
  }elseif ($vremePreuzimanja == '7.5') {
    $vremePreuzimanja = '07:30';
  }elseif ($vremePreuzimanja == '8') {
    $vremePreuzimanja = '08:00';
  }elseif ($vremePreuzimanja == '8.5') {
    $vremePreuzimanja = '08:30';
  }elseif ($vremePreuzimanja == '9') {
    $vremePreuzimanja = '09:00';
  }elseif ($vremePreuzimanja == '9.5') {
    $vremePreuzimanja = '09:30';
  }elseif ($vremePreuzimanja == '10') {
    $vremePreuzimanja = '10:00';
  }elseif ($vremePreuzimanja == '10.5') {
    $vremePreuzimanja = '10:30';
  }elseif ($vremePreuzimanja == '11') {
    $vremePreuzimanja = '11:00';
  }elseif ($vremePreuzimanja == '11.5') {
    $vremePreuzimanja = '11:30';
  }elseif ($vremePreuzimanja == '12') {
    $vremePreuzimanja = '12:00';
  }elseif ($vremePreuzimanja == '12.5') {
    $vremePreuzimanja = '12:30';
  }elseif ($vremePreuzimanja == '13') {
    $vremePreuzimanja = '13:00';
  }elseif ($vremePreuzimanja == '13.5') {
    $vremePreuzimanja = '13:30';
  }elseif ($vremePreuzimanja == '14') {
    $vremePreuzimanja = '14:00';
  }elseif ($vremePreuzimanja == '14.5') {
    $vremePreuzimanja = '14:30';
  }elseif ($vremePreuzimanja == '15') {
    $vremePreuzimanja = '15:00';
  }elseif ($vremePreuzimanja == '15.5') {
    $vremePreuzimanja = '15:30';
  }elseif ($vremePreuzimanja == '16') {
    $vremePreuzimanja = '16:00';
  }elseif ($vremePreuzimanja == '16.5') {
    $vremePreuzimanja = '16:30';
  }elseif ($vremePreuzimanja == '17') {
    $vremePreuzimanja = '17:00';
  }elseif ($vremePreuzimanja == '17.5') {
    $vremePreuzimanja = '17:30';
  }elseif ($vremePreuzimanja == '18') {
    $vremePreuzimanja = '18:00';
  }elseif ($vremePreuzimanja == '18.5') {
    $vremePreuzimanja = '18:30';
  }elseif ($vremePreuzimanja == '19') {
    $vremePreuzimanja = '19:00';
  }elseif ($vremePreuzimanja == '19.5') {
    $vremePreuzimanja = '19:30';
  }elseif ($vremePreuzimanja == '20') {
    $vremePreuzimanja = '20:00';
  }elseif ($vremePreuzimanja == '20.5') {
    $vremePreuzimanja = '20:30';
  }elseif ($vremePreuzimanja == '21') {
    $vremePreuzimanja = '21:00';
  }elseif ($vremePreuzimanja == '21.5') {
    $vremePreuzimanja = '21:30';
  }elseif ($vremePreuzimanja == '22') {
    $vremePreuzimanja = '22:00';
  }elseif ($vremePreuzimanja == '22.5') {
    $vremePreuzimanja = '22:30';
  }elseif ($vremePreuzimanja == '23') {
    $vremePreuzimanja = '23:00';
  }elseif ($vremePreuzimanja == '23.5') {
    $vremePreuzimanja = '23:30';
  }
  $vremeVracanja = $_POST['vremeVracanja'];
  if ($vremeVracanja == '0') {
    $vremeVracanja = '00:00';
  }elseif ($vremeVracanja == '0.5') {
    $vremeVracanja = '00:30';
  }elseif ($vremeVracanja == '1') {
    $vremeVracanja = '01:00';
  }elseif ($vremeVracanja == '1.5') {
    $vremeVracanja = '01:30';
  }elseif ($vremeVracanja == '2') {
    $vremeVracanja = '02:00';
  }elseif ($vremeVracanja == '2.5') {
    $vremeVracanja = '02:30';
  }elseif ($vremeVracanja == '3') {
    $vremeVracanja = '03:00';
  }elseif ($vremeVracanja == '3.5') {
    $vremeVracanja = '03:30';
  }elseif ($vremeVracanja == '4') {
    $vremeVracanja = '04:00';
  }elseif ($vremeVracanja == '4.5') {
    $vremeVracanja = '04:30';
  }elseif ($vremeVracanja == '5') {
    $vremeVracanja = '05:00';
  }elseif ($vremeVracanja == '5.5') {
    $vremeVracanja = '05:30';
  }elseif ($vremeVracanja == '6.') {
    $vremeVracanja = '06:00';
  }elseif ($vremeVracanja == '6.5') {
    $vremeVracanja = '06:30';
  }elseif ($vremeVracanja == '7') {
    $vremeVracanja = '07:00';
  }elseif ($vremeVracanja == '7.5') {
    $vremeVracanja = '07:30';
  }elseif ($vremeVracanja == '8') {
    $vremeVracanja = '08:00';
  }elseif ($vremeVracanja == '8.5') {
    $vremeVracanja = '08:30';
  }elseif ($vremeVracanja == '9') {
    $vremeVracanja = '09:00';
  }elseif ($vremeVracanja == '9.5') {
    $vremeVracanja = '09:30';
  }elseif ($vremeVracanja == '10') {
    $vremeVracanja = '10:00';
  }elseif ($vremeVracanja == '10.5') {
    $vremeVracanja = '10:30';
  }elseif ($vremeVracanja == '11') {
    $vremeVracanja = '11:00';
  }elseif ($vremeVracanja == '11.5') {
    $vremeVracanja = '11:30';
  }elseif ($vremeVracanja == '12') {
    $vremeVracanja = '12:00';
  }elseif ($vremeVracanja == '12.5') {
    $vremeVracanja = '12:30';
  }elseif ($vremeVracanja == '13') {
    $vremeVracanja = '13:00';
  }elseif ($vremeVracanja == '13.5') {
    $vremeVracanja = '13:30';
  }elseif ($vremeVracanja == '14') {
    $vremeVracanja = '14:00';
  }elseif ($vremeVracanja == '14.5') {
    $vremeVracanja = '14:30';
  }elseif ($vremeVracanja == '15') {
    $vremeVracanja = '15:00';
  }elseif ($vremeVracanja == '15.5') {
    $vremeVracanja = '15:30';
  }elseif ($vremeVracanja == '16') {
    $vremeVracanja = '16:00';
  }elseif ($vremeVracanja == '16.5') {
    $vremeVracanja = '16:30';
  }elseif ($vremeVracanja == '17') {
    $vremeVracanja = '17:00';
  }elseif ($vremeVracanja == '17.5') {
    $vremeVracanja = '17:30';
  }elseif ($vremeVracanja == '18') {
    $vremeVracanja = '18:00';
  }elseif ($vremeVracanja == '18.5') {
    $vremeVracanja = '18:30';
  }elseif ($vremeVracanja == '19') {
    $vremeVracanja = '19:00';
  }elseif ($vremeVracanja == '19.5') {
    $vremeVracanja = '19:30';
  }elseif ($vremeVracanja == '20') {
    $vremeVracanja = '20:00';
  }elseif ($vremeVracanja == '20.5') {
    $vremeVracanja = '20:30';
  }elseif ($vremeVracanja == '21') {
    $vremeVracanja = '21:00';
  }elseif ($vremeVracanja == '21.5') {
    $vremeVracanja = '21:30';
  }elseif ($vremeVracanja == '22') {
    $vremeVracanja = '22:00';
  }elseif ($vremeVracanja == '22.5') {
    $vremeVracanja = '22:30';
  }elseif ($vremeVracanja == '23') {
    $vremeVracanja = '23:00';
  }elseif ($vremeVracanja == '23.5') {
    $vremeVracanja = '23:30';
  }
	$ime =  $_POST['ime'];
	$prezime =  $_POST['prezime'];
	$brtel =  $_POST['brtel'];
	$email =  $_POST['email'];
	$rodjen =  $_POST['rodjen'];
	$let = $_POST['let'];
	$komentar = $_POST['komentar'];
	
$gps = "";
	$oguranje = "";
	$sediste = "";
	$karton = "";
	$lanci = "";
		$carsreservprice = "SELECT * FROM price WHERE carid='$car'";
        $cars_price = mysqli_query($db, $carsreservprice);
            while($rows=mysqli_fetch_assoc($cars_price)){ 

            	if ($daysDiff == 1) {
            		$iznos = $daysDiff * $rows['1d'];
            	}
            	elseif (1 < $daysDiff and $daysDiff < 6) {
            		$iznos = $daysDiff * $rows['2d5d'];
            	}
            	elseif (5 < $daysDiff and $daysDiff < 11) {
            		$iznos = $daysDiff * $rows['6d10d'];
            	}
            	elseif (10 < $daysDiff and $daysDiff < 16) {
            		$iznos = $daysDiff * $rows['11d15d'];
            	}
            	elseif (15 < $daysDiff) {
            		$iznos = $daysDiff * $rows['16d'];
            	}
            }
            	if (is_numeric($daysDiff)) {
                if ($_POST['gpsVal'] == $check) {
                  $plusgps = $daysDiff * 3;
                  $gps = DO4;
                }
                if ($_POST['osiguranjeVal'] == $check) {
                  $pluspsoguranje = $daysDiff * 5;
                  $oguranje = DO1;
                }
                if ($_POST['sedisteVal'] == $check) {
                  $plussediste = $daysDiff * 3;
                  $sediste = DO2;
                }
                if ($_POST['kartaVal'] == $check) {
                  $pluskarton = 20;
                  $karton = DO5;
                }
                if ($_POST['lanciVal'] == $check) {
                  $pluslanci = $daysDiff * 2;
                  $lanci = DO3;
                }
	            		$ukupno = $iznos + $plusgps + $pluspsoguranje + $plussediste + $pluskarton + $pluslanci;
	            		$ukupno = $ukupno;
	            		$ukupnozadodatke = $plusgps + $pluspsoguranje + $plussediste + $pluskarton + $pluslanci;
	            		$ukupnozadodatke = $ukupnozadodatke;
	            		$ukupaniznos = "Ukupno: ".$ukupno."€"; 
	            		$iznos = $iznos;
            	}else{
            		$ukupaniznos = "Ukupno: 00€"; 
            	}
 
        $cairimg = "SELECT * FROM img WHERE carid = '$car' LIMIT 1" ;
            $cairimg_result = mysqli_query($db, $cairimg);
            while($rowsimg=mysqli_fetch_assoc($cairimg_result)) { 
            	$slikaAutomobila =  $rowsimg['img'];
            }
        $carNaziv = "SELECT * FROM cars WHERE carid='$car'";
        $car_Naziv = mysqli_query($db, $carNaziv);
            while($rows=mysqli_fetch_assoc($car_Naziv)){ 
            	if ($rows['name'] == 'skodago') {
	              $nazivAutomobila = SKODAGO;
	            }elseif ($rows['name'] == 'up') {
	              $nazivAutomobila = UP;
	            }elseif ($rows['name'] == 'fabia') {
	              $nazivAutomobila = FABIA;
	            }elseif ($rows['name'] == 'fiesta') {
	              $nazivAutomobila = FIESTA;
	            }elseif ($rows['name'] == 'yaris') {
	              $nazivAutomobila = YARIS;
	            }elseif ($rows['name'] == 'astra') {
	              $nazivAutomobila = ASTRA;
	            }elseif ($rows['name'] == 'logan') {
	              $nazivAutomobila = LOGAN;
	            }elseif ($rows['name'] == 'focus') {
	              $nazivAutomobila = FOCUS;
	            }elseif ($rows['name'] == 'fluence') {
	              $nazivAutomobila = FLUENCE;
	            }elseif ($rows['name'] == 'tipo') {
	              $nazivAutomobila = TIPO;
	            }elseif ($rows['name'] == 'octavia') {
	              $nazivAutomobila = OCTAVIA;
	            }elseif ($rows['name'] == 'opelastra') {
	              $nazivAutomobila = OPELASTRA;
	            }
        	}
          $depozit2 = '400';
          if ($oguranje == DO1) {
            $depozit2 = '100';
          }elseif ($nazivAutomobila == SKODAGO) {
            $depozit2 = '200';
          }elseif ($nazivAutomobila == UP) {
            $depozit2 = '200';
          }elseif ($nazivAutomobila == FABIA) {
            $depozit2 = '300';
          }elseif ($nazivAutomobila == YARIS) {
            $depozit2 = '300';
          }

// the message
$msg = "RENT A CAR START\n
Mesto Preuzimanja: ".$mesto1."\n
Mesto Vracanja: ".$mesto2."\n
\n
Firstname: ".$ime."\n
Lastname: ".$prezime."\n
\n
Number: ".$brtel."\n
Age: ".$rodjen."\n
E-mail: ".$email."\n
Broj leta: ".$let."\n
\n
Datum Preuzimanja: ".date_format($datumPreuzimanja,"d/m/Y")."\n
Vreme Preuzimanja: ".$vremePreuzimanja."\n
\n
Datum Vracanja: ".date_format($datumVracanja,"d/m/Y")."\n
Vreme Vracanja: ".$vremeVracanja."\n
\n
Broj dana: ".$daysDiff.";
Auto: ".$nazivAutomobila.";
\n
Komentar: ".$komentar."\n
\n
Dodatci: ".$gps.$oguranje.$sediste.$karton.$lanci."\n
\n
Depozit: ".$depozit2."€
".$ukupaniznos."

";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
if (mail("metatarget98@gmail.com","RENT A CAR START",$msg)) {
  echo "Reservation Successful";
 } else{
  echo "Error";
 }

}
}
?>