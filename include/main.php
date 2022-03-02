<main>

<div class="main_img_text">
	<img src="img/mainimg.jpg">
	<div class="main_text">
		<p><?php echo MAIN_1; ?></p>
		<p><?php echo MAIN_2; ?></p>
		<p><?php echo MAIN_3; ?></p>
		<p><?php echo MAIN_4; ?></p>
	</div>
</div>
<div class="main_aside">
	<div class="aside_aside">
		<span>+381 60 455 9550<br> <?php echo ASIDE_ADRES; ?>
      <?php if (isset($_COOKIE['email'])) {
          echo '<br><br>'.$_COOKIE['fname'].' '.$_COOKIE['lname'];  
      }?>
		</span>

    <?php     
    if (!isset($_COOKIE['email']))  {
      echo '<button id="LoginBtn">'.ASIDE_JOIN.'</button>
            <button id="JoinBtn">'.ASIDE_LOGIN.'</button>';
      }elseif (isset($_COOKIE['email'])) {
      echo '<button onclick="logOut()">'.LOGOUT.'</button>';  
    }?>



	</div>
</div>
<div class="img_car">
	<img src="img/mainimgcar.jpg">

</div>


<div class="reserv">
	<form id="form_search" action="" method="post">
		<div class="form_wrap">
      <select class="select_place" id="select_place">
          <option value="" selected="selected"><?php echo FORM_SELECT; ?></option>
          <option value="1" ><?php echo FORM_SELECT1; ?></option>
          <option value="2" ><?php echo FORM_SELECT2; ?></option>
          <option value="3" id="option_place_input"><?php echo FORM_SELECT3; ?></option>
          <input type="text" id="palce_input"  placeholder="<?php echo FORM_SELECT4; ?>">
      </select> <br>
      <div class="form_datum">      
      	<?php echo FORM_DATE1; ?>
      	<input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" autocomplete="off"/>
  	  </div>
  	  <div class="form_datum"> 
        <?php echo FORM_DATE2; ?>
      <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" autocomplete="off"/> 
      </div>
      <div class="form_datum">      
        <?php echo FORM_TIME1; ?>
      <select name="pickup_time" id="pickup_timee" class="pickup-time" autocomplete="off">
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
       <div class="form_datum">  
        <?php echo FORM_TIME2; ?>
      <select name="return_time" id="return_timee" class="return-time" autocomplete="off">
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
       <br/>
            </div>
            </div>  
            <button type="submit" name="submit" class="form_search_btn btn_triger_Reserv" id="btn_triger_Search"><img src="img/lupa.png"> <?php echo FORM_SEARCH; ?></button>
			
 </form> 
</div>
</main>
