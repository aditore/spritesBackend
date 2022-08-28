<?php
    require("../config/mysql_connect.php");
    // if variable isn't null run the data
	// update user data
    if(isset($_POST['update']))
{	
	// grab id, username and password from mysql connection
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
			
// updating the table
	$result = mysqli_query($conn, "UPDATE user_data SET username='$username',password='$password' WHERE id=$id");
		
// relocate to index after stement complete
	header("Location: ../index.php");
}
?>
<?php
// getting id from url
// update file
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM user_data WHERE id=$id");
$resultTwo = mysqli_query($conn, "SELECT * FROM character_data WHERE userData=$id");

// give two seperate results
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
	<!-- link to index -->
	<a href="../index.php">Home</a>
	<br/>
	<!-- edit user data	 -->
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
	<!-- add and delete file -->
	<form name="form2" method="post" action="./add_file.php">
		<input type="hidden" name="id" value=<?php echo $id;?>>
		<button type="text" name="username" value="<?php echo $file;?>">ADD FILE</button>		
	</form>
	<form name="form3" method="delete" action="./delete_file.php">	
		<input type="hidden" name="id" value=<?php echo $id;?>>
		<button type="text" name="delete" value="<?php echo $id;?>">DELETE FILE</a></td>
	</form>
</body>
</html>