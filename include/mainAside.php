<main class="main_vehicles">
<div class="kovid">
	<img src="img/kovid-2.jpg">
</div>
<div class="main_aside2">
	<div class="aside_aside2">
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
<div class="main_vehicles_wraper">
<?php include $mainInclude; ?>
</div>
</main>
