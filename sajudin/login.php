<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi SPP</title>
    <style>
    </style>
</head>
<body>

<?php 
        if(isset($_GET["login_error"])){
            echo "<h2 style='color:red';>Username atau password salah</h2>";
        }
        ?>

    <form method="post" action="proseslogin.php">
        <div class="container" align="center">
            <img src="pic/logo.png" width="150px" height="150px"/>
            <h1>Login SPP</h1>

            <label for="username">Username</label>
            <input type="text" name="username" required><br></br>

            <label for="password">Password</label>
            <input type="password" name="password" required><br></br>

            <button type="submit" name="login" value="login" class="login">Login</button>

        </div>
    </form>
    
</body>
</html>