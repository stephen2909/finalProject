<!DOCTYPE html>
<html>
<?php
include_once '../phpScript/connection.php';

$username=$_POST['usrname'];
$pass=$_POST['psw'];
$qcek="SELECT username FROM users WHERE username = '$username'";
$query= "SELECT users.ID_U as id, users.username as username, users.pass as pass, users.userID as userid, users.name as name, userGroups.name as position FROM users join UserGroups on users.ID_UG = userGroups.ID_UG where username = '$username' AND pass='$pass'";

if ($result=$conn->query($qcek)) {
	if ($row=$result->fetch_array()) {
		$qcek="SELECT username, pass FROM users WHERE username = '$username' AND pass='$pass'";	
		if ($result=$conn->query($qcek)) {
			if ($row=$result->fetch_array()) {
				if($result=$conn->query($query)){
					if($row=$result->fetch_array()){
						include_once'startSession.php';
						$_SESSION['id']=$row['id'];
						$_SESSION['username']=$row['username'];
						$_SESSION['pass']=$row['pass'];
						$_SESSION['userid']=$row['userid'];
						$_SESSION['name']=$row['name'];
						$_SESSION['position']=$row['position'];
						$cookieval=$row['username'];
						setcookie("cookieuname", "$cookieval", time() + (86400 * 30), "/");
						echo $_COOKIE['cookieuname'];
						if ($_SESSION['position']=='lecturer') {
							header("Location: ../pages/lecturer/lct.php");
						}else{
							header("Location: ../pages/student/std.php");
						}
					}
				}
			}else{

				echo "password salah";
			}
		}
	}else{
		echo "username salah!";
	}
}

?>

<head>
	<title></title>
</head>
<body>
	<?php ?>


</body>
</html>
