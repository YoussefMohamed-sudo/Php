<?php
session_start();

include 'db.php';

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){

        $user = mysqli_fetch_assoc($result);

        if($password == $user['password']){

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];

            header("Location: home.php");
            exit();

        }else{
            echo "Wrong Password";
        }

    }else{
        echo "Email Not Found";
    }
}
?>


<!DOCTYPE html>
<head>
    <title>Login page</title>
</head>
<body>
<h1>login page</h1>
<form method="post">
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>Password: </label>
    <input type="password" name="password" required>
    <hr>
    <input type="submit" name="submit" value="Login">
</form>
</body>
</html>