<?php
    $servername = 'localhost';
    $dbname = 'db1';
    $username = 'root';
    $password = '';

    $sql = "INSERT INTO test (name, email , phone_number) ";
    $sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

    // Connect to server and select database

    $connect = mysqli_connect($servername, $username, $password, $dbname);
    if(mysqli_connect_errno())
    {
        echo "Connection couldn't be established to SQL: " . mysqli_connect_errno();
    }

    // Execute sql statement
    $result = mysqli_query($connect,$sql);

    if($result)
    {
        echo"Record has been added.<br/>";
    }
    else
    {
        echo"Flaw transpired: " . mysqli_error($connect);
    }

    $sql = "SELECT * from test";

    // Execute sql statement
    $result = mysqli_query($connect,$sql);

    if($result)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            echo "$row[name]  $row[email]  $row[phone_number] <br/>";
        }
    }
    else
    {
        echo "Fault occured when calling for data.";
    }
?>