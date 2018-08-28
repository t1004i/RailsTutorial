<?php

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NESThair</title>
    <link rel="stylesheet" href="css/style.css" media="screen">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
        <div class="mediafloat"><div>
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
      <!-- メイン画像ここから -->
      <div id="mainimage" class="box-shadow">
        <img src="images/mainimage.jpg" alt="メイン画像">
      </div>
      <!-- メイン画像ここまで -->
      <!-- ひだりここから -->
      <div id="left" class="box-shadow">
        <h2>新着情報</h2>
        <ul>
          <li><span>2018-6-1 </span>夏定番の<a href="#" id="are" data-toggle="modal" data-target="#exampleModal">アレ</a>始めました。</li>
          <li><span>2018-4-10</span>GWの休業について</li>
          <li><span>2018-2-20</span>4月1日から営業時間が変わります。</li>
          <li><span>2018-2-1</span>MASHIKOhairリニューアルオープン記念のお知らせ</li>
        </ul>
      </div>
      <!-- ひだりここまで -->
      <!-- Modal -->
      <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">2018年6月～期間限定</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img src="images/cold.png" class="img-fluid" alt="夏空と冷やしシャンプーの画像">
            </div>
            <!--<div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>-->
          </div>
        </div>
      </div>
      <!-- みぎここから -->
      <div class="mediafloat"><div>
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
      <p>Copyright (C) MASHIKOhair</p>
    </footer>
    <!-- ふったーここまで -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(function(){
      $('#are').click(function(){
        $('#exampleModal').fadeIn();
      })
    });
    </script>
  </body>
  
</html>