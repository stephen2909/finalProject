<div class="w3-sidebar w3-bar-block w3-grey w3-quarter" style="width:85%%;margin-top: 175px;"> 
	You are login as
	<?php 
	include'../../phpScript/startSession.php';

	echo "<br><h3>".$_SESSION['userid']."</h3>";
	echo "<h3>".$_SESSION['name']."</h3>";
	?>
	<hr>
	<img src="../../img/profile.png" style="height: 15%;margin-left: 20px ">
	<a href="<?php echo "lct.php"?>" class="w3-bar-item w3-button" style="margin-left: 20px"><i class="fa fa-home"></i> HOME</a>
	<a href="#" class="w3-bar-item w3-button" style="margin-left: 20px"><i class="fa fa-list"></i> MY COURSES</a>
	<a href="#" class="w3-bar-item w3-button" style="margin-left: 20px"><i class="fa fa-user"></i> MY PROFILE</a>

	<a href="../../index.php" class="w3-bar-item w3-button" style="margin-left: 20px"><i class="fa fa-power-off"></i> LOG OUT</a>
</div>