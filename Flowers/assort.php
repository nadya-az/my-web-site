<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title> Flowers.inc </title>

<style>
  body {
     background-image: url("ffoottoo.jpg");
       background-attachment: fixed;
      }
#glaw{
  margin:auto;
  width:880px;
}
.blok1, .blok2, .blok3, .blok4 {
  float:left;
  margin:3px 3px 3px 5px;
  width:200px;
  height:200px;
  padding: 5px;
  text-align: center;
  border-radius: 4px;
  box-shadow: rgba(0,0,0,1.2) 0px 1px 3px;
}
input[type='submit']{
     padding: 10px 25px 8px;
     color: #fff;
     background-color: #eeb9a2;
     text-shadow: #eeb9a2 0 1px 0;
     font-size: 16px;
     box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0;
     border: 1px solid #eeb9a2;
     border-radius: 2px;
     margin-top: 10px;
     cursor:pointer;
}
</style>
</head>
<body>
  <h1 align="center" style="color:#000000; font-size:100px"> Flowers.inc </h1>
     <div id="glaw">
     <div class="blok1">Композиция №1
     <p><img class="right" src="kompoz1.png"></p>
     <br>
     <a href="dashboard.php"><input name="submit" type="submit" value="Купить"/> </a>
     </div>
     </div>
    <div class="blok2">Композиция №2
    <p><img class="right" src="kompoz2.png"></p>
    <br>
     <a href="dashboard.php"><input name="submit" type="submit" value="Купить"/> </a>
    </div>
    <div class="blok3">Композиция №3
    <p><img class="right" src="kompoz3.png"></p>
    <br>
     <a href="dashboard.php"><input name="submit" type="submit" value="Купить"/> </a>
    </div>
    <div class="blok4">Композиция №4
    <p><img class="right" src="kompoz4.png"></p>
    <br>
     <a href="dashboard.php"><input name="submit" type="submit" value="Купить"/> </a>
    </div>
  </div>
  <div class="form">
<p> Выберите желаемую композицию и нажмите на кнопку "Купить". </p>
<p><a href="index.php"> Вернуться на главную страницу</a></p>
</div>
</body>
</html>