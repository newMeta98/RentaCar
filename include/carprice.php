<div class="car_price_hidden">
<?php 
	
		$carsreservprice = "SELECT * FROM price";
        $cars_price = mysqli_query($db, $carsreservprice);
            while($rows=mysqli_fetch_assoc($cars_price)){ 
?>
		<div class="<?= $rows['carid']?>">
			<input type="text" name="" class="1d" value="<?= $rows['1d']?>" readonly>	
			<input type="text" name="" class="2d5d" value="<?= $rows['2d5d']?>" readonly>	
			<input type="text" name="" class="6d10d" value="<?= $rows['6d10d']?>" readonly>	
			<input type="text" name="" class="16d" value="<?= $rows['16d']?>" readonly>
		</div>
<?php } ?>
</div>