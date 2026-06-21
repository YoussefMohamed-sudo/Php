<?php 
include 'db.php';
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email,password)
            VALUES ('$name', '$email', '$password')";

    if(mysqli_query($conn, $sql)){
        echo "User Added Successfully";
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add User</title>
    </head>
    <body>
        <h1>Add New User</h1>
        <form method="post">
            <label>Name:</label>
            <input type="text"  name="name" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <hr>
            <label>Password</label>
            <input type="password" name="password" required>
            <br>
            <input type="submit" name="submit" value="add user">
        </form>
    </body>
</html>