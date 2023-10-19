<?php

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Email
        if(empty($email)){
            echo 'Email cannot be empty';
        }else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo 'Email is invalid type';
            }else{
                echo 'success';
            }
        }

        //username
        if(empty($username)){
            echo 'username cannot be empty';
        }else{
            if(!preg_match('/^[a-zA-Z\s]+$/', $username)){
                echo 'username is of invalid type';
            }else{
                echo 'success';
            }
        }

        //password
        if(empty($password)){
            echo 'password cannot be empty';
        }else{
            if(!preg_match('^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$^', $password)){
                echo 'password is invalid type';
            }else{
                echo 'success';
            }
        }
    }
    
?>
<html>
    <head>
        <title>Login</title>
    </head>

    <body>
        
        <form action="index.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email">

            <label for="username">Username:</label>
            <input type="text" name="username">

            <label for="password">Password:</label>
            <input type="password" name="password">

            <input type="submit" name="submit">
        </form>

    </body>
</html>