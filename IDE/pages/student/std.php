<!-- include connection -->
<!DOCTYPE html>
<html>
<head>
	<title>IDE</title>
	<?php 
	include '../../phpScript/connection.php';
	include '../../layout/style.php';
	include_once '../../phpScript/startSession.php';
	?>
	
	<!-- include style -->
</head>

<body>
	<?php $myCourses = false ?>
	<?php include '../../layout/header.php';
	include '../../layout/sidebar.php';
	?>

	<!-- include header -->
	<div class="w3-main">
		<!-- include sidebar -->
		<?php 
		include '../../layout/sidebar.php';
		include '../../phpScript/courses.php';

		?>
		<div class="w3-threequarter" style="float: right;margin-top: 12%; margin-left: 1%; " >
			<h2 class="w3-grey w3-card w3-text-black" style="padding-left: 20px;"> COURSE OVERVIEW</h2>
			<a  class="w3-card-4 w3-padding-16" style="border: 1px; margin-top: 5px; display: block;" href="<?php echo "course.php?id=".$courseID."&courseTitle=".$course ?>" > <?php echo "$course"?></a>

			
		</div>


	</div>
</body>
</html>