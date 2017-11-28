<!DOCTYPE html>
<html>
<?php 
include 'phpScript/connection.php';
include 'layout/style.php';

?>

<head>
	<title>IDE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="lib/w3.css">
	<link rel="stylesheet" href="lib/w3-theme-dark-grey.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="lib/font-awesome.min.css">
	<link rel="stylesheet" href="lib/font-awesome.css">
</head>
<body background="img/bgImg.jpg">
	<div class="w3-display-left w3-margin-left" style="color: white">
		<h1 >IDE</h1>
		<h3>Interactive Digital Learning Enviroment</h3>
		<h3>Faculty of indormation Technology and Science</h3>
		<button onclick="openModal()" class="w3-button w3-theme w3-xlarge ">Login</button>
	</div>
	<div class="w3-display-topright" style="color: white">
		<button class="w3-margin-top w3-theme-l4 w3-large">About us</button>
		<button class="w3-margin-top w3-theme-l4 w3-large">Contact us</button>
		<button class="w3-margin-top w3-theme-l4 w3-large">Help</button>
	</div>
	<div class="w3-display-bottomleft w3-margin-left" style="color: white">
		Develop By 
	</div>
	<!-- modal -->
	<div class="w3-container" style="color: black">

		<div id="id01" class="w3-modal" style="border: 5px solid black;">
			<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

				<div class="w3-center"><br>
					<span onclick="closeModa()" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
				</div>
					<h1 class="w3-margin-left">Login</h1>
				<form class="w3-container" action="phpScript/login.php" method="post">
					<div class="w3-section">
						<label><b>Username</b></label>
						<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required value="<?php if(isset($_COOKIE['cookieuname'])){echo $_COOKIE['cookieuname'];}?>">
						<label><b>Password</b></label>
						<input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
						<button class="w3-button w3-block w3-black w3-section w3-padding" type="submit" style="width: 100px;">Login</button>
						<p><span><a href="#">forget password</a> or <a href="">forget username</a>?</span></p>
					</div>
				</form>
			</div>
		</div>
	</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
function openModal(){
	document.getElementById('id01').style.display='block';
}
function closeModal(){
	document.getElementById('id01').style.display='none';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
	
	
</body>
</html>