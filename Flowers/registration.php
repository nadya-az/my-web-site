
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Flowers.inc </title>
<link rel="stylesheet" href="stylesss.css" />
</head>
<body>
	
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>

<div class="form">
<h1> Регистрация </h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Имя" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Пароль" required />
<input type="submit" name="submit" value="Зарегистрироваться" />
</form>
<a href="login.php"><input name="submit" type="submit" value="Назад"/> </a>
</div>

<?php } ?>
</body>
</html>