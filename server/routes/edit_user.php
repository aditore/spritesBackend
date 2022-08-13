<?php
    require("../config/mysql_connect.php");
    
    if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
			
//updating the table
	$result = mysqli_query($conn, "UPDATE user_data SET username='$username',password='$password' WHERE id=$id");
		
//redirecting to the display page. In our case, it is index.php
	header("Location: ../index.php");
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM user_data WHERE id=$id");
$resultTwo = mysqli_query($conn, "SELECT * FROM character_data WHERE userData=$id");

while($res = mysqli_fetch_array($result))
{
	$username = $res['username'];
	$password = $res['password'];
}

while($res = mysqli_fetch_array($resultTwo))
{
	$file = $res['file'];
}
?>

<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="../index.php">Home</a>
	<br/>	
	<form name="form1" method="post" action="./edit_user.php">
		<table>
			<tr> 
				<td>Name</td>
				<td><input type="text" name="username" value="<?php echo $username;?>"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo $password;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id;?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	<form name="form2" method="post" action="./add_file.php">
		<table>
			<tr> 
				<td>File</td>
				<td><button type="text" name="username" value="<?php echo $file;?>">ADD FILE</button></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id;?>></td>
			</tr>
		</table>
	</form>
</body>
</html>