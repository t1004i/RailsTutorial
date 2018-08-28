<?php 

require_once('data.php');


?>



<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NESThair</title>
    <link rel="stylesheet" href="css/style.css" media="screen">
  </head>
  <body>
    <!-- ラッパーここから -->
    <div id="wrapper">
      <!-- ヘッダーここから -->
      <header>
        <h1>
          栃木の学生向けオーガニックヘアサロンなら<br>
          <span>MASHIKOhair</span>
        </h1>
        <nav>
          <ul>
            <li><a href="index.php">ホーム</a></li>
            <li><a href="menu.php">メニュー一覧</a></li>
            <li><a href="contact.php">ご予約</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
        <p id="nav_tel">
          <img src="images/tel_nav.jpg" alt="
          お電話でのご予約はこちらまで012-345-6789">
        </p>
      </header>
      <!-- ヘッダーここまで -->
      <!-- みだしここから -->
      <h2 id="heading" class="box-shadow">
        メニュー一覧
      </h2>
      <!-- みだしここまで -->
      <!-- ひだりここから -->
      <div id="left" class="box-shadow">
        <h3>メニュー</h3>
        <dl>
          <dt>Cut</dt>
          <dd>
            <?php foreach($menus as $menu) {
              echo '<p>'.$menu->getName().'<span class="yen">'.$menu->getPrice().'yen</span>'.'</p>';
              
            }?>
            <!-- 一般　・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・5,800yen<br>
             学生　・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・4,800yen<br>
             小学生以下　・・・・・・・・・・・・・・・・・・・・・・・・・・・・2,800yen<br>-->
          </dd>
          <div class="clear"></div>
          <dt>Color</dt>
          <dd>
             <?php foreach($options as $option) {
              echo '<p>'.$option->getName().'<span class="yen">'.$option->getPrice().'yen</span>'.'</p>';
              
            }?>
          </dd>
          <div class="clear"></div>
          
        </dl>
      </div>
      <!-- ひだりここまで -->
      <!-- みぎここから -->
      <div id="right">
        <ul>
          <li class="box-shadow"><a id ="contact" href="contact.php">ご予約・お問い合わせ</a></li>
          <li class="box-shadow"><a id ="blog" href="#">スタイリストブログ</a></li>
        </ul>
      </div>
      <!-- みぎここまで -->
      <div class="clear"></div>
    </div>
    <!-- ラッパーここまで -->
    <!-- ふったーここから -->
    <footer>
      <p>Copyright (C) MASHIKOhair.</p>
    </footer>
    <!-- ふったーここまで -->
  </body>
</html>