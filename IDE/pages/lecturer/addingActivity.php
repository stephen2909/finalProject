<!-- include connection -->
<!DOCTYPE html>
<html>
<head>
	<title>IDE</title>
	<!-- include style -->

	<link rel="stylesheet" href="../../lib/font-awesome.css">
</head>

<body>
	<?php $myCourses = false ?>

	<?php
	include '../../layout/style.php';
	include '../../layout/header.php';
	?>

	<!-- include header -->
	<div class="w3-main">
		<?php 
		include '../../layout/sidebar.php';

		?>
		<!-- Title -->
		<div class="w3-threequarter" style="float: right;margin-top: 12%; margin-left: 2%;" >
			<?php 
			if (isset($_GET['pilihan'])) {
				$temp=$_GET["pilihan"];						
			}
			?>
			<div class="w3-theme">
				<h2 class="w3-card w3-text-black" style="margin-top: 20px;"> Adding a New <?php echo $temp; ?></h2>
			</div>
			<button id="btnA" class="w3-button w3-black" style="margin-left: 800px">Collapse All <i class="fa fa-sort-desc"></i></button>
			
			<fieldset>
				<legend><button id="btnG" class="w3-black w3-button">General <i class="fa fa-sort-desc"></i></button></legend>
				<div class="w3-container " id="formG">
					<div class=" w3-text-red" >
						Name*:
						<input type="text" style="margin-bottom: 10px">
					</div><br>
					
					<p>Description: <textarea style="width: 85%;"></textarea></p>	

				</div>
			</fieldset>
			<?php
			if ($temp=="Assignment") {
				echo "<fieldset style='margin-top: 20px'>
				<legend><button id='btnD' class='w3-black w3-button'>Availability <i class='fa fa-sort-desc'></i></button></legend>
				<div class='w3-container '' id='formD'>
				Allow Submission from <i class='fa fa-question-circle'></i> : <input type='Date' style='margin-bottom: 10px'><br>
				Due Date <i class='fa fa-question-circle'></i> :<input type='Date' style='margin-bottom: 10px'><br>
				</div>
				</fieldset>";
			}
			?>
			<fieldset style="margin-top: 20px">
				<legend><button id="btnF" class="w3-black w3-button">File <i class="fa fa-sort-desc"></i></button></legend>
				<div class="w3-container " id="formF">
					<p style="font-weight: bold">Select File <i class="fa fa-question-circle"></i></p><input type="file" name="">
				</div>
			</fieldset>

		</div>



		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>

			var is_click = false;
			var is_clickG = false;
			var is_clickF = false;
			var is_clickD = false;

			$(document).ready(function(){
				$("#btnA").click(function(){
					if (is_clickG==true &&is_clickF==true&& is_clickD==true) {
						$("#formF,#formG,#formD").removeClass("w3-hide");
						is_clickF=false;
						is_clickG=false;
						is_clickD=false;
					}else  if (is_clickG==false &&is_clickF==false&& is_clickD==false){
						$("#formF,#formG,#formD").toggleClass("w3-hide");
						is_clickF=true;
						is_clickG=true;
						is_clickD=true;
					}else if (is_clickG==false || is_clickD==false||is_clickF==false){
						$("#formF,#formG,#formD").addClass("w3-hide");
						is_clickF=true;
						is_clickG=true;
						is_clickD=true;
					}
				});
				$("#btnG").click(function(){
					$("#formG").toggleClass("w3-hide");
					if (is_clickG==true) {
						is_clickG=false;
					}else{
						is_clickG=true;
					}
				});
				$("#btnD").click(function(){
					$("#formD").toggleClass("w3-hide");
					if (is_clickD==true) {
						is_clickD=false;
					}else{
						is_clickD=true;
					}
				});
				$("#btnF").click(function(){
					$("#formF").toggleClass("w3-hide");
					if (is_clickF==true) {
						is_clickF=false;
					}else{
						is_clickF=true;
					}
				});
			});
		</script>
		<!-- include sidebar -->
	</div>
</body>
</html>