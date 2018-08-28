<?php
  session_start();
  session_destroy();
  $year = date('Y');
  
?>


<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NESThair</title>
    <link rel="stylesheet" href="css/style.css" media="screen">
    <script type="text/javascript" src="js/script1.js"></script>
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
        ご予約・お問い合わせ
      </h2>
      <!-- みだしここまで -->
      <!-- ひだりここから -->
      <div id="left" class="box-shadow">
        <div class="iframe-wrap">
          <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdLvZQ4sZ-iahwK2bNE9irz6jokQNiugx1uoBYKI4j9UIPuPQ/viewform?embedded=true" width="555" height="400" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます...</iframe>
        </div>
      <!--
        <h3>ご予約・お問い合わせフォーム</h3>
        <p id="contact_text">
            下記お問い合わせフォームよりご希望の日時ご予約内容をお知らせください。<br>
            お問い合わせの場合は、【お客様ご要望欄】に記入して送信してください。
        </p>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdLvZQ4sZ-iahwK2bNE9irz6jokQNiugx1uoBYKI4j9UIPuPQ/viewform?embedded=true" width="555" height="300" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます...</iframe>
        <!--
        <form action="../sent.php" method="POST" name="form1">
          <table>
            <tr>
              <td class="form_title">
                <label for="form_name">お名前</label><span class="his">(必須)</span>
              </td>
              <td class="form_contents">
                <input id="form_name" maxlength="8" type="text" name="name" placeholder="例）美容院　太郎" required>
              </td>
            </tr>
            <tr>
              <td class="form_title">
                <label for="form_tel">お電話番号</label><span class="his">(必須)</span>
              </td>
              <td class="form_contents">
                <input id="form_tel" pattern="^[0-9]+$" maxlength="11" type="text" name="tel" placeholder="例）01204567890" required>
              </td>
            </tr>
            <tr>
              <td class="form_title">
                <label for="form_time">ご希望日時</label>
              </td>
              <td class="form_contents">
                <input class="form_time" pattern="^[0-9]+$" maxlength="4" type="text" name="nen" placeholder="<?php echo $year; ?>">年
                <input class="form_time" pattern="^[0-9]+$" maxlength="2"type="text" name="gatu">月
                <input class="form_time" pattern="^[0-9]+$" maxlength="2" type="text" name="hi">日
                <input class="form_time" pattern="^[0-9]+$" maxlength="2" type="text" name="kara">時から
                <input class="form_time" pattern="^[0-9]+$" maxlength="2" type="text" name="made">時まで
              </td>
            </tr>
            <tr>
              <td class="form_title">
                <label for="form_menu">ご希望メニュー</label>
              </td>
              <td class="form_contents">
                <input id="menu_cut" type="checkbox" value="カット" name="contents[]"><label for="menu_cut">カット</label>
                <input id="menu_color" type="checkbox" value="カラー" name="contents[]"><label for="menu_color">カラー</label>
                <input id="menu_perm" type="checkbox" value="パーマ" name="contents[]"><label for="menu_perm">パーマ</label>
              </td>
            </tr>
            <tr>
              <td class="form_title">
                <label for="form_textarea">お客様ご要望欄</label>
              </td>
              <td class="form_contents">
                <textarea id="form_textarea" name="formstext"></textarea>
                
              </td>
            </tr>
          </table>
          <p id="submit"><input type="submit" value="送信内容確認"></p>
        </form>-->
      </div>
      <div class="mediafloat"></div>
      <!-- ひだりここまで -->
      <!-- みぎここから -->
      <div id="right">
        <ul>
          <!--<li class="box-shadow"><a id ="contact" href="#">ご予約・お問い合わせ</a></li>
          -->
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