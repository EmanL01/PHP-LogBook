<?php

 $servername = 'localhost';
 $dbname = 'db1';
 $username = 'root';
 $password = '';

 // Connect to server and select database
 $connect = mysqli_connect($servername, $username, $password, $dbname);
 if(mysqli_connect_errno())
 {
     echo "Couldn't connect to SQL: " . mysqli_connect_errno();
 }

	$sql = "SELECT * from test";
    
 // Execute sql statement

 $result = $connect->query($sql);

	
?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[ID]\">$row[name]</a></br>";  	
}
?>
</body>
</html>

