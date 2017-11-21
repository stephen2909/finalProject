<!DOCTYPE html>
<html>
<?php
include '../phpScript/connection.php';
include'../layout/style.php';
$username=$_POST['usrname'];
$pass=$_POST['psw'];
$qcek="SELECT username FROM users WHERE username = '$username'";
$query= "SELECT Users.ID_U as id, Users.username as username, Users.pass as pass, Users.userID as userid, Users.name as name, UserGroups.name as position 
FROM Users join UserGroups 
on Users.ID_UG = UserGroups.ID_UG 
where users.username='%username' ";
if ($result=$conn->query($qcek)) {
	if ($row=$result->fetch_row()) {
		$qcek="SELECT username, pass FROM users WHERE username = '$username' AND pass='$pass'";	
		if ($result=$conn->query($qcek)) {
			if ($row=$result->fetch_row()) {
				include'startSession.php';

			}else{

				echo "password salah";
			}
		}
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
