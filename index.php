<?php
echo "<h1>へい</h1>";
?>

<!-- 2-1-1 -->
<?php $total = 1500*1.08?>
<p>税込金額は：<?php echo $total;?>円です。</p>

<!-- 2-1-3 -->
<?php $total = 100;
  echo '結果：',$total,'円<br>'; 
  // 結果：100円変数と値を「つなげた結果を」出力する
  print '結果：'.$total.'円'; 
  // 結果：100円変数と値を「つなげることなく順々に」出力する
?>

<!-- 2-1-4 -->
<p><?php var_dump($total);?></p> <!-- データ型をだす -->

<!-- 2-2-1 -->
<?php
  $integerValue = 10;
  $floatValue = 12.34;
  $stringValue1 = '文字列１';
  $stringValue2 = "文字列２";
  $boolValue = true;
  $nullValue = null;
  $emptyStringValue = "";
  ?>
<p>整数:<?= $integerValue;?></p>
<p>浮動小数点:<?= $floatValue;?></p>
<p>文字列１:<?= $stringValue1;?></p>
<p>文字列２:<?= $stringValue2;?></p>
<p>真偽値:<?= var_dump($boolValue);?></p>
<p>NULL値:<?= var_dump($nullValue);?></p>
<p>文字列３（空文字）:<?= var_dump($emptyStringValue);?></p>

<!-- 2-2-2 -->
<?php
  $value = 'World';
  $combined1 = 'Hell'.$value.'!';
  $combined2 = "Hello{$value}!";
  $combined3 = 'Hello';
  $combined3 .= $value;
  $combined3 .= '!';
  $combined4 = 'Hello{$value}!';
?>
<p><?=$combined1?></p>
<p><?=$combined2?></p>
<p><?=$combined3?></p>
<p><?=$combined4?></p>
<p><?php echo 'Hello'.$value.'!'; ?></p>
<p><?php echo "Hello{$value}!"; ?></p>

<!-- 2-2-3 -->
<?php
  $quoted1 = 'The Bookk of "PHP\'s Honkaku"';
  $quoted2 = "The Bookk of \"PHP's Honkaku\"";
?>
<p><?=$quoted1?></p>
<p><?=$quoted2?></p>

<!-- 2-2-4 -->
<?php
  $mailBody = "お問い合わせを受け付けました。 \n\n";
  $mailBody .= "■お問い合わせ内容：\n";
  $mailBody .= "\t商品番号「abc123」について、サイズを教えて下さい。";
?>
<p><pre><?=$mailBody?></pre></p>

<!-- 2-2-5 -->
<?php
  $mailBody = "お問い合わせを受け付けました。".PHP_EOL;
  $mailBody .= "■お問い合わせ内容：".PHP_EOL;
  $mailBody .= "\t商品番号「abc123」について、サイズを教えて下さい。";
?>
<p><pre><?=$mailBody?></pre></p>

<!-- 2-2-6 -->
<?php
  $itemNumber = 'abc123';
  $mailBody = <<< MAIL
お問い合わせを受け付けました。

■お問い合わせ内容：
  商品番号「{$itemNumber}」について、"サイズ"と'色の種類'を教えて下さい。
MAIL;
  ?>
<p><pre><?=$mailBody?></pre></p>

<p><pre><?php
echo <<< 'EOM'
本文です。{$value}
本文です。
EOM;
?></pre></p>

<!-- 2-2-7 -->
<p>
  <?php 
    $moji = "：";
    echo (int)1.5 + 2.6;
    echo $moji;
    echo (int)(1.5 + 2.6);
    echo $moji;
    echo (int)1.5 + (int)2.6;
  ?>
</p>
<p>
  <?php
    echo intval(1.5) + 2.6;
    echo intval(1.5 + 2.6);
    echo intval(1.5) + intval(2.6);
  ?>
</p>
<p>
<?php
  var_dump(1234);
  var_dump((string)1234);
  var_dump((int)1234.5);
  var_dump((string)true);
  var_dump((string)false);
  var_dump((bool)'true');
  var_dump((bool)'false');
  var_dump((bool)0);
  var_dump((bool)1);
  var_dump((bool)-1);
?>
</p>
<p>
<?php
  var_dump(strval(1234));
  var_dump(intval(1234.5));
  var_dump(strval(true));
  var_dump(strval(false));
  var_dump(boolval('true'));
  var_dump(boolval('false'));
  var_dump(boolval(0));
  var_dump(boolval(1));
  var_dump(boolval(-1));
?>
</p>

<!-- 2-2-8 -->
<p>
  <?php
  $airports = ['Haneda', 'Narita', 'Chubu'];
  $airports[] = 'Kansai';
  $airports[] = 'Naha';
  
  $airports[2] = 'Sendai'
  ?>
  <p><?=$airports[0]?></p>
  <p><?=$airports[1]?></p>
  <p><?=$airports[2]?></p>
  <p><?=$airports[3]?></p>
  <p><pre><?php print_r($airports);?></pre></p>
</p>

<!-- 2-2-9 -->
