<?php

 $id = $_GET['id'];
 setcookie('id', $id);

 $servername = 'localhost';
 $dbname = 'db1';
 $username = 'root';
 $password = '';


	// Connect to server and select database
    $connect = mysqli_connect($servername, $username, $password, $dbname);
    if(mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    
	$sql = "SELECT * FROM test WHERE ID = $id ";

	// Execute query
    $result = mysqli_query($connect, $sql);

	$row = mysqli_fetch_assoc($result);
?>
<html>
<body>
<form action= "wk6ex2action.php" method ="post">

	Name :
	<input type=text name=txtname value="<?php echo $row['name'] ?>" readonly />
	</br>
	Phone number :
	<input type=text name=txttelno value="<?php echo $row['phone_number'] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<?php echo $row['email'] ?>" />
	</br>
	<input type=submit name=btnsubmit value="save"/>
	<input type=submit name=btnsubmit value="Update"/>
</form>
</body>
</html>