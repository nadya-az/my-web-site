<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>

<style>
  body {
     background-image: url("ffoottoo.jpg");
       background-attachment: fixed;
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
input[type='submit']{
     padding: 10px 25px 8px;
     color: #000000;
     background-color: #eeb9a2;
     text-shadow: rgba(0,0,0,0.24) 0 1px 0;
     font-size: 16px;
     box-shadow: #eeb9a2, 0 2px 0 0 inset, #eeb9a2, 0 1px 0 0;
     border: 1px solid #ffffff;
     border-radius: 2px;
     margin-top: 0px;
     cursor:pointer;
}

input[type='submit']:hover {
     background-color: #eeb9a2;
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
</style>

 </style>
  <title> Flowers.inc </title>
</head>
<body>
<?php
require('db.php');
if (isset($_REQUEST['comment'])){
        // removes backslashes
$username=$_SESSION['username'];
$comment=$_REQUEST['comment'];
        $query = "INSERT into `comments` (username,comment)
VALUES ('$username', '$comment')";
        $result = mysqli_query($con,$query);
    }{
      ?>
<div class="comment">
<form name="form" action="" method="post">
<input type="text" name="comment" placeholder="Your opinion" required />
<input type="submit" name="submit" value="Оставить отзыв" />
</form>
<br>
<a href="index.php"><input name="submit" type="submit" value="Главная страница"/> </a>

<a href="assort.php"><input name="submit" type="submit" value="Перейти к нашему ассортименту"/> </a>

<a href="dashboard.php"><input name="submit" type="submit" value="Купить"/> </a>

</div>
<br>
<?php } ?>
<?php
require('db.php');
  $query ="SELECT * FROM comments";
 
$result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>Id</th><th>Имя пользователя</th><th>Коментарий</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($con);
?>
</body>
</html>