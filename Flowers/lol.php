<?php
    session_start(); 
    if (!$_SESSION['admin']){
        header("Location: index.php");
    } else {
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

a {
    color:#0067ab;
    text-decoration:none;
}

a:hover {
    text-decoration:underline;
}

.form {
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
    opacity: 0.9;
    filter: alpha(opacity=80);
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
                <td> password  </td>
                <td> Y / M / D </td>
                <td> administrator  </td>
            </tr>
<?php
        $sql="SELECT * FROM `users`;";
        $results=mysqli_query($con,$sql);
        $results->fetch_all(MYSQLI_ASSOC);
        foreach($results as $result){
            echo "<tr><td>".$result['id']."</td><td>".$result['username']."</td><td>".$result['email']."</td><td>".$result['password']."</td><td>".$result['trn_date']."</td><td>".$result['administrator']."</td></tr>";
        }
?>
        </table>
        <p>Добро пожаловать <?php echo $_SESSION['username']; ?>!</p>
        <form method="post">
            <p>Введите идентификатор пользователя для назначения его администратором :<input type="int" name="ban" style="width: 2%;"></p>
            <p>Введите идентификатор пользователя для удаления прав администратора :<input type="int" name="razban" style="width: 2%;"></p>
            <input type="submit" name="">
        </form>
<?php
        if ($_POST['ban'] != null) {
            $idb = $_POST['ban'];
            $queryb2 = "UPDATE `users` SET `administrator` = 1 WHERE `username` = '$idb' or `id` = $idb;";
            $resultb2 = mysqli_query($con, $queryb2);
        }
        if ($_POST['razban'] != null) {
            $idb = $_POST['razban'];
            $queryb2 = "UPDATE `users` SET `administrator` = 0 WHERE `username` = '$idb' or `id` = $idb";
            $resultb2 = mysqli_query($con, $queryb2);
        }
?>
        <div class="form">
            <a href="test.php"><input name="submit" type="submit" value="Следующая страница"/> </a>
            <a href="index.php"><input name="submit" type="submit" value="Назад"/> </a>
        </div>
    </body>
</html>
<?php
    }
?>