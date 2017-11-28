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
		<div class="w3-threequarter" style="float: right;margin-top: 12%; margin-left: 1%; " >
			<div class="w3-theme">
				<h2 class=" w3-card w3-text-black" style="padding-left: 20px;margin-top: 20px"> COURSE OVERVIEW</h2>
			</div>
			<?php

			include '../../phpScript/courses.php';
			?>
		</div>

		<!-- include sidebar -->
	</div>
</body>
</html>