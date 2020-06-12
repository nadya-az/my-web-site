<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Flowers.inc</title>
<style>
body {
     background-image: url("ffoottoo.jpg");
       background-attachment: fixed;
}
     font-family:Arial, Sans-Serif;
}
.clearfix:before, .clearfix:after{
     content: "";
     display: table;
}
.clearfix:after{
     clear: both;
}
a{
     color:#0067ab;
     text-decoration:none;
}
a:hover{
     text-decoration:underline;
}
.form{
     width: 300px;
     margin: 0 auto;
}
input[type='text'] {
     width: 200px;
     border-radius: 2px;
     border: 1px solid #CCC;
     padding: 10px;
     color: #333;
     font-size: 14px;
     margin-top: 10px;
}
input[type='submit']{
     padding: 10px 25px 8px;
     color: #fff;
     background-color: #0067ab;
     text-shadow: rgba(0,0,0,0.24) 0 1px 0;
     font-size: 16px;
     box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0;
     border: 1px solid #0164a5;
     border-radius: 2px;
     margin-top: 10px;
     cursor:pointer;
}
input[type='submit']:hover {
     background-color: #024978;
}
	</style>
</head>
<body>
	<h1 align="center" style="color:#000000; font-size:80px"> Etherial. </h1>	
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $quantity = stripslashes($_REQUEST['quantity']);
 $quantity = mysqli_real_escape_string($con,$quantity);
 $volume = stripslashes($_REQUEST['volume']);
 $volume = mysqli_real_escape_string($con,$volume);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `orders` (username, quantity, volume, email, trn_date)
VALUES ('$username', '$quantity','$volume', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3> You order is successfully registered!</h3>
<br/> To return to the home page, <a href='index.php'>click here </a></div>";
        }
    }else{
?>
<div class="form">
<h1> Заполните поля для регистрации заказа </h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Имя" required />
<input type="text" name="email" placeholder="Email" required />
<input type="text" name="quantity" placeholder="Количество" required />
<input type="text" name="volume" placeholder="Композиция №" required />
<input type="submit" name="submit" value="Зарегистрировать заказ" />
</form>
</div>
<p>Не волнуйтесь. Это безопасная зона.<p>
<p>Все ваши данные надежно защищены.<p>
<p><a href="assort.php"> Ознакомьтесь с нашим ассортиментом продукции </a></p>
<p><a href="histori.php"> Больше о нас</a></p>
<p><a href="logout.php"> Выйти из аккаунта</a></p>
<?php } ?>
</body>
</html>