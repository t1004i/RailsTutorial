<?php
  $err = false;
  $numb=0;
  function myhtmlspecialchars($string){
    if(is_array($string)){
      return array_map("myhtmlspecialchars",$string);
    }else if(isset($string) == 0){
      return '';
    }else{
      return htmlspecialchars($string, ENT_QUOTES);
    }
  }
  function jumpin(){
    sleep(1);
    http_response_code(301);
    header("Location: ../hair/contact.php");
    exit;
    
  }

  if (isset($_POST["sub1"])){
    $mesg = "";
    session_start();
    foreach($_SESSION as $sName => $sValue){
      if ($sValue){
        $mesg += $sName."  ".$sValue."\n";
      }
    mb_language("japanese");
    mb_internal_encoding("EUC-JP");
    $to = "tinoue.insta201806@gmail.com";
    $subject = "予約問い合わせの件";
    $body = $mesg;
    $from = "otoiawase@dmail.com";
    mb_send_mail($to,$subject,$body,"From:".$from);
    sleep(5);
    echo '<script type="text/javascript">{ alert("送信しました"); }</script>';
    sleep(5);
    jumpin();
    }
    
    
  } else {
  $name = myhtmlspecialchars($_POST['name']);
  $tel = myhtmlspecialchars($_POST['tel']);
  $nen = myhtmlspecialchars($_POST['nen']);
  $gatu = myhtmlspecialchars($_POST['gatu']);
  $hi = myhtmlspecialchars($_POST['hi']);
  $kara = myhtmlspecialchars($_POST['kara']);
  $made = myhtmlspecialchars($_POST['made']);
  if(empty($_POST['contents'])){
    $contents = false;
  }else{
    $contents = myhtmlspecialchars($_POST['contents']);
  }
  if ($nen && $gatu && $hi){
    $hiduke = ['年' => $nen, '月' => $gatu, '日' => $hi,'時から' => $kara, '時まで' => $made];
  } else {
    $hiduke = ['されていません' => '入力が'];
  }
  
  if (empty($_POST['formstext'])){
    $formstext = "";
    
  } else {
    $formstext = myhtmlspecialchars($_POST['formstext']);
  }
  session_start();
  $_SESSION['name'] = $name;
  $_SESSION['tel'] = $tel;
  foreach ($hiduke as $key => $value){
    $_SESSION[$key] = $value;
  }
  if (empty($contents)){
    $_SESSION['content'] = "なし";
  }else{
   foreach ($contents as $content1){
     $_SESSION["メニュー".$numb] = $content1;
     $numb++;
   }
  }
   $_SESSION['text'] = $formstext;
   

  }
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
            <li><a href="#">ホーム</a></li>
            <li><a href="#">メニュー一覧</a></li>
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
        <h3>ご予約・お問い合わせご確認</h3>
        <?php
          if(empty($contents) === false && count($hiduke) === 1){
            echo '<p id="contact_text">入力内容に不備がございます。<br>ブラウザの戻るを押してください。</p>';
            $err = true;
          } else if(empty($contents) && count($hiduke) > 1){
            echo '<p id="contact_text">[ご希望メニュー]が選択されておりません。<br>ブラウザの戻るを押してください。</p>';
            $err = true;
          } else if($name !== "" && $tel !== "" && $formstext === "" && count($hiduke) === 1){
            echo '<p id="contact_text">[お客様ご要望欄]が入力されておりません。<br>ブラウザの戻るを押してください。</p>';
            $err = true;
          } else {
            echo '<p id="contact_text">ご予約・お問い合わせありがとうございます。<br>下記の内容でよろしければ「送信」ボタンを押してください。</p>';
          }
        ?>
        <form action="" method="POST">
          <table>
            <tr>
              <td class="form_title">
                <label for="form_name">お名前</label>
              </td>
              <td class="form_contents">
                <?php echo $name; ?>
              </td>
            </tr>
            <tr>
              <td class="form_title">
                <label for="form_tel">お電話番号</label>
              </td>
              <td class="form_contents">
                <?php echo $tel; ?>
              </td>
            </tr>
            <tr>
              <td class="form_title">
                <label for="form_time">ご希望日時</label>
              </td>
              <td class="form_contents">
                <?php foreach($hiduke as $key => $value){
                  if($value == ""){
                    continue;
                  }else{
                    echo $value.$key;
                  }
                  }?>
              </td>
            </tr>
            <tr>
              <td class="form_title">
                <label for="form_menu">ご希望メニュー</label>
              </td>
              <td class="form_contents">
                <?php 
                if($contents == true){
                  foreach($contents as $key => $value){
                  echo $value."  ";
                  }
                }
                  ?>
              </td>
            </tr>
            <tr>
              <td class="form_title">
                <label for="form_textarea">お客様ご要望欄</label>
              </td>
              <td class="form_contents">
                <?php echo $tel; ?>
              </td>
            </tr>
          </table>
          <?php
            if ($err !== true){
              echo '<p id="submit"><input type="submit" value="送信する" name="sub1"></p>';
            } else {
              echo '<p id="submit"><button class="button1" type="button" onclick="history.back()">戻る</button></p>';
            }
          ?>
        </form>
      </div>
      <!-- ひだりここまで -->
      <!-- みぎここから -->
      <div id="right">
        <ul>
          <li class="box-shadow"><a id ="contact" href="../hair/contact.php">ご予約・お問い合わせ</a></li>
          <li class="box-shadow"><a id ="blog" href="#">スタイリストブログ</a></li>
        </ul>
      </div>
      <!-- みぎここまで -->
      <div class="clear"></div>
    </div>
    <!-- ラッパーここまで -->
    <!-- ふったーここから -->
    <footer>
      <p>Copyright (C) 2010-2015 Canpus inc. All Right Reserved.</p>
    </footer>
    <!-- ふったーここまで -->
  </body>
</html>