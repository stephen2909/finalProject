<?php  

include 'connection.php';
$idc=$_SESSION['idc'];

$topicCT=1;

$query2="SELECT DISTINCT activities.topic FROM activities JOIN `act types` on activities.ID_AT=`act types`.`ID_AT` where activities.ID_C='$idc'";
$result=$conn->query($query2);
while ( $row=$result->fetch_array()) {
	echo "<div class='w3-card-4 w3-padding-16 '><a  style='border: 1px; margin-top: 20px; margin-bottom:20px;' href='' ><i class='fa fa-newspaper-o'></i> Topic ".$topicCT."</a><br>";
	$query="SELECT  ID_C as idc,activities.ID_AT as idat, title as title, topic as topic, `act types`.`actTypes`as actype FROM activities JOIN `act types` on activities.ID_AT=`act types`.`ID_AT` where activities.ID_C='$idc' AND activities.topic='$topicCT'";
	$result2=$conn->query($query);
	$fileCT=1;
	while ($row2=$result2->fetch_array()) {

		echo "<a>File ".$fileCT."</a><br>";
		$fileCT++;
	}

	if ($_SESSION['position']=='lecturer') {
		echo "<button onclick='openModal()' class='w3-button w3-black' style='margin-left : 20px;'>Add Activity</button>";
	}else{

	}
	echo "</div>";
	$topicCT++;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>