<?php 
include 'db.php';

if(isset($_POST['submit']))
    {
        $email =$_POST['email'];
        $name =$_POST['name'];
        $password =$_POST['password'];

        $sql = "INSERT INTO users(name, email, password)
        
                VALUES ('$name','$email','$password')";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo 'sign up success';
        }
        else{
            echo 'sign up not success';
        }


    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sign up</h1>
    <form method="post">
        <label>
            Name; 
        </label>
        <input type="text" name="name" required>
        <label>
            Email: 
        </label>
        <input type="email" name="email" required>
        <label>
            Password:
        </label>
        <input type="password" name="password" required>

        <hr>
        <input type="submit" name="submit" >
    </form>
</body>
</html>


