<!DOCTYPE html>
<html>
<?php
include '../phpScript/connection.php';
include'../layout/style.php';
include'sessionStart.php';
$username=$_POST['usrname'];
$query= "SELECT Users.ID_U as id, Users.username as username, Users.pass as pass as pass, Users.userID as userid, Users.name as name, UsersGroups.name as positiion FROM Users join UserGroups on Users.ID_UG = UsersGroups.ID_UG 
where users.username=%username";
if ($result=$conn->query($query)) {
	if ($row=$result->fetch_row()) {
		
	}else{
		echo "username salah!";
	}
}


if (isSet($_POST['usrname'])) {
	$name=$_POST['psw'];
	if (isSet($name)&& $name!="") {
		$query.=" WHERE name LIKE '%$name%'";
	}
}
?>

<head>
	<title></title>
</head>
<body class="w3-teal">
	<?php include'../layout/sidebar.php'; ?>


</body>
</html>
