<div class="w3-sidebar w3-bar-block w3-grey w3-quarter" style="margin-top: 175px;width: 24%;"> 
	You are login as
	<?php 
	include_once '../../phpScript/startSession.php';

	echo "<br><h3>".$_SESSION['userid']."</h3>";
	echo "<h3>".$_SESSION['name']."</h3>";
	?>
	<hr>
	<img src="../../img/profile.png" style="height: 15%;margin-left: 20px ">
	<a href="<?php echo "lct.php"?>" class="w3-bar-item w3-button" style="margin-left: 20px"><i class="fa fa-home"></i> HOME</a>
	<a href="#" class="w3-bar-item w3-button" style="margin-left: 20px"><i class="fa fa-list"></i> MY COURSES</a>
	<a href="#" class="w3-bar-item w3-button" style="margin-left: 20px"><i class="fa fa-user"></i> MY PROFILE</a>
		<a href="../../phpScript/logout.php" class="w3-bar-item w3-button" style="margin-left: 20px"><i class="fa fa-power-off" id="log"></i> LOG OUT</a>

</div>
