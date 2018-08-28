<?php
  require_once('menudata.php');

  $adult = new Menu('大人',3700);
  $dkjk = new Menu('高校生',3300);
  $dcjc = new Menu('中学生',3000);
  $childs = new Menu('小学生以下',2700);

  $color = new Optionmenu('カラー',3000);
  $white = new Optionmenu('白髪ぼかし',1300);
  $spa = new Optionmenu('ヘッドスパ',3000);
  $menus = [$adult, $dkjk, $dcjc, $childs];
  $options = [$white, $color, $spa]

?>