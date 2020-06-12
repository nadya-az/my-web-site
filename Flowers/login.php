<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Flowers.inc</title>
<link rel="stylesheet" href="stylesss.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
     $pol = $_POST['username'];
        $query228 = "SELECT * FROM `users` where `username` = '$pol'";
     $result228 = mysqli_query($con, $query228);
     $row228 = mysqli_fetch_assoc($result228);
     $otvet = $row228['administrator'];
      if ($otvet == 1) {
            $_SESSION['admin'] = true;
         }else{
         	$_SESSION['admin'] = false;
         }
            // Redirect user to index.php
     header("Location: index.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>
<div class="form">
<h1> Вход </h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Имя" required />
<input type="password" name="password" placeholder="Пароль" required />
<input name="submit" type="submit" value="Войти" />
</form>
<p>Еще не зарегистрированы? <a href='registration.php'>Зарегистрироваться</a></p>
</div>
<?php } ?>
</body>
</html>