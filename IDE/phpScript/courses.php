<?php
include 'connection.php';
$id= $_SESSION['id'];
$querry="SELECT Courses.code  as coursecode , Courses.course as course , Courses.ID_C as id from Courses JOIN Enrollments ON Courses.ID_C = Enrollments.ID_C WHERE $id=Enrollments.ID_U";
$result=$conn->query($querry);
while ( $row=$result->fetch_array()) {

	$courseID=$row['id'];
	$coursecode=$row['coursecode'];
	$course=$coursecode." / ".$row['course'];
	$_SESSION['course']=$course;
	$_SESSION['idc']=$courseID;
	?>
	<a  class='w3-card-4 w3-padding-16' style='border: 1px; margin-top: 5px; display: block;' href='<?php echo 'course.php?id='.$_SESSION['idc'].'&courseTitle='.$course ?>' > <?php echo $_SESSION['course'] ?></a>
	<?php
}
?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php 
	

	?>
	
</body>
</html>
