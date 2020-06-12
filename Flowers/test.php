<?php session_start(); 
if ($_SESSION['admin'] == true) {
?>
<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Flowers.inc </title>
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
     color: #fff;
     background-color: #eeb9a2;
     text-shadow: rgba(0,0,0,0.24) 0 1px 0;
     font-size: 16px;
     box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0;
     border: 1px solid #eeb9a2;
     border-radius: 2px;
     margin-top: 10px;
     cursor:pointer;
}

input[type='submit']:hover {
     background-color: #cf5927;
}

td {
    background: #FFFFFF;
    opacity: 0.8;
    filter: alpha(opacity=20);

}


</style>
</head>
<body>
    <audio id=audio src="backsound.mp3" hidden autoplay></audio>
    <h1 align="center" style="color:#000000; font-size:100px"> Flowers.inc </h1>
<table  align="center" border="1" cellspacing="0" cellpadding="15" width="90%" height="130">
<tr>
<td> id  </td>
<td> username </td>
<td>  email </td>
<td> quantity  </td>
<td> volume  </td>
<td> Y / M / D </td>
</tr>
<?php
require('db.php');
$sql="SELECT * FROM `orders`;";
$results=mysqli_query($con,$sql);
$results->fetch_all(MYSQLI_ASSOC);
foreach($results as $result){
    echo "<tr><td>".$result['id']."</td><td>".$result['username']."</td><td>".$result['email']."</td><td>".$result['quantity']."</td><td>".$result['volume']."</td><td>".$result['trn_date']."</td></tr>";
}

?>
</table>
<div class="form">
<p><a href="assort.php"> Ознакомьтесь с нашим ассортиментом продукции </a></p>
<a href="dashboard.php"><input name="submit" type="submit" value="Сделать заказ "/> </a>
<a href="index.php"><input name="submit" type="submit" value="Назад"/> </a>
</div>
</body>
</html>
<?php
}
?>