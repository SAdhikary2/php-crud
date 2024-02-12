<?php

include "connect.php";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];

    $sql = "insert into `cruud` (name,email,password,mobile) values ('$name','$email','$password','$mobile')";

    $result= mysqli_query($con,$sql);

    if($result){
        echo "data inserted successfully";
    }
    else{
        die(mysqli_error($con));
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>
<body>
    
<h1>Add New User</h1>
<form method="post">
Name : <input type="text" name="name"><br><br>
Email : <input type="email" name="email"><br><br>
Password : <input type="text" name="password"><br><br>
Mobile : <input type="text" name="mobile"><br><br>

<input type="submit" name="submit" value="submit">
</form>


</body>
</html>