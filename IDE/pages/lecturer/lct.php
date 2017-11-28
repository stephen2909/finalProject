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
		include '../../phpScript/courses.php';

		?>
		<div class="w3-threequarter" style="float: right;margin-top: 12%; margin-left: 1%; " >
			<h2 class="w3-grey w3-card w3-text-black" style="padding-left: 20px;"> COURSE OVERVIEW</h2>
			<a  class="w3-card-4 w3-padding-16" style="border: 1px; margin-top: 5px; display: block;" href="<?php echo "course.php?id=".$courseID."&courseTitle=".$course ?>" > <?php echo "$course"?></a>

		</div>

		<!-- include sidebar -->
	</div>
</body>
</html>