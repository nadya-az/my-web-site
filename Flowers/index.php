<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Flowers.inc</title>
<link rel="stylesheet" href="style1.css" />
</head>
<body>

<div id="wrapper">
    <header>
      <h1>Flowers.inc</h1>
      <p>Добро пожаловать <?php echo $_SESSION['username']; ?>!</p>
      <form name="search" action="#" method="get">
  <input type="text" name="q" placeholder="Search">
  <button type="submit">GO</button>
</form>
</header>
    <div class = "container">
    	<nav>
      <ul class="top-menu">
    <li>
      <a href="/home/">ГЛАВНАЯ</a>
    </li>
    <li><a href="histori.php">О НАС</a></li>
    <li>
      <a href="/contact/">КОНТАКТЫ</a>
    </li>
    <li><a href='login1.php'>ВЫХОД</a></li>
  </ul></nav>
    <div id="heading"></div>
    <div class="section">
    	<aside>
    		<div class="section">
    			<nav>
  <ul class="aside-menu">
    <li><a href='assort.php'>БУКЕТЫ</a></li>
     <li><a href="comments.php">ОТЗЫВЫ</a></li>
    <li><a href="/gift/">ПОДАРКИ</a></li>
    <li><a href="/bouquetn/">БУКЕТ НЕВЕСТЫ</a></li>
    <li><a href="/decor/">ДЕКОР</a></li>
  </ul>
</nav>
</aside>

    <section>
    	<div class="section">
<blockquote>
      <p>
    “Жители планеты, где нет цветов, решили бы, что на Земле, где цветы на каждом шагу, мы, наверное, с ума сходим от радости.”
      </p>
  <cite>Айрис Мердок</cite>
  </blockquote>
 <figure1>
  <img src="flow.png" width="460" height="295" alt="">
</figure1>
<figure2>
  <img src="flow3.png" width="460" height="295" alt="">
</figure2>
<figure3>
  <img src="flow2.png" width="460" height="295" alt="">
</figure3>
<figure4>
  <img src="flow5.png" width="460" height="295" alt="">
</figure4>
</section>
</div>
  <footer><div id="footer">
    <div id="sitemap">
      <h3>КАРТА САЙТА</h3>
  <div>
    <a href="/home/">ГЛАВНАЯ</a>
    <a href="/about/">О НАС</a>
    <a href="/services/">СЕРВИСЫ</a>
  </div>
  <div>
    <a href="/customers/">Помощь</a>
    <a href="/contact/">Контакты</a>
  </div>
</div>
  </div></footer>
</div>
<div class="form">
</div>
<?php
if ($_SESSION['admin'] == true) {
?>
<p> <a href='lol.php'> Личный кабинет администратора </a></p>
<p> <a href='test.php'> Покупатели, которые уже сделали заказ. </a></p>
<?php
}
?>
</body>
</html>
