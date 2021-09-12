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
<?php
$user = [
  'name' => '山下次郎',
  'age' => 30,
  'place' => '有田'
];
$user['job'] = '伝統工芸士';
$user['hobby'] = 'パン作り';
?>
<p><?=$user['name']?></p>
<p><?=$user['age']?></p>
<p><?=$user['place']?></p>
<p><?=$user['job']?></p>
<p><?=$user['hobby']?></p>
<p><pre><?php print_r($user);?></pre></p>

<!-- 2-2-10 -->
<?php
  $participants = [];
  $participants[0] = '小林';
  $participants[1] = '田中';
  $participants[2] = '鈴木';
  $participants['event'] = '大井町開催 ワイン会';
  $participants['event-date'] = '2022.1.15';
?>
<pre><?php print_r($participants)?></pre>

<!-- 2-2-11 -->
<?php
  $airports = [
    [
      'name' => '羽田',
      'address' => '東京都大田区'
    ],
    [
      'name' => '成田',
      'address' => '千葉県成田市'
    ],
    [
      'name' => '中部国際',
      'address' => '愛知県常滑市'
    ]
  ];
  $airports[] =
    [
      'name' => '関西国際',
      'address' => '大阪府泉佐野市',
    ];
?>
<p><?=$airports[0]['name']?>-<?=$airports[0]['address']?></p>
<p><?=$airports[1]['name']?>-<?=$airports[1]['address']?></p>
<p><?=$airports[2]['name']?>-<?=$airports[2]['address']?></p>
<p><?=$airports[3]['name']?>-<?=$airports[3]['address']?></p>
<p><pre><?php print_r($airports);?></pre></p>

<?php
  $chars = [
    ['あ','い','う','え','お'],
    ['か','き','く','け','こ'],
    ['さ','し','す','せ','そ']
  ];
  $chars[] = ['た','ち','つ','て','と'];
?>
<p>chars[0][0]:<?=$chars[0][0]?></p>
<p>chars[0][1]:<?=$chars[0][1]?></p>
<p>chars[0][2]:<?=$chars[0][2]?></p>
<p>chars[1][0]:<?=$chars[1][0]?></p>
<p>chars[1][1]:<?=$chars[1][1]?></p>
<p>chars[1][2]:<?=$chars[1][2]?></p>
<p><pre><?php print_r($chars);?></pre></p>

<!-- 2-2-12 -->
<?php
  $chars = ['a','b','c'];
  echo count($chars), PHP_EOL;

  $chars = [
    'a'=>'あ',
    'i'=>'い',
    'u'=>'う',
    'e'=>'え',
    'o'=>'お'
  ];
  echo count($chars), PHP_EOL;
?>

<!-- 2-2-13 -->
<?php
  $userData = [12345, 'Tarou Yamada', 'Tokyo', 32];
?>
<p>ユーザーID：<?=$userData[0]?></p>
<p>ユーザー名：<?=$userData[1]?></p>
<p>都道府県：<?=$userData[2]?></p>
<p>年齢：<?=$userData[3]?></p>

<?php
  $id = $userData[0];
  $name = $userData[1];
  $prefecture = $userData[2];
  $age = $userData[3];
?>
<p>ユーザーID：<?=$id?></p>
<p>ユーザー名：<?=$name?></p>
<p>都道府県：<?=$prefecture?></p>
<p>年齢：<?=$age?></p>

<!-- リストを使う -->
<?php
  $userData = [12345, 'Tarou Yamada', 'Tokyo', 32];
  list($id, $name, $prefecture, $age) = $userData;
?>
<p>ユーザーID：<?=$id?></p>
<p>ユーザー名：<?=$name?></p>
<p>都道府県：<?=$prefecture?></p>
<p>年齢：<?=$age?></p>

<!-- 2-2-14 -->
<?php
  define('TAX_PERCENT', 0.08);

  define('SMTP_HOST', 'example.com');
?>
<p>消費税率：<?=TAX_PERCENT;?></p>
<p>１００円の税込金額：<?=100 + 100 * TAX_PERCENT;?></p>
<p>SMTPサーバー：<?=SMTP_HOST;?></p>

<!-- 2-2-15 -->
<?php
  function someFunction()
  {
    echo '現在の関数名は：',__FUNCTION__,'です。<br>';
  }
  echo '現在のファイル名は：',__FILE__,'です。<br>';
  echo '現在の行番号は：',__LINE__,'です。<br>';
  echo '現在のディレクトリは：',__DIR__,'です。<br>';
  someFunction()
?>

<!-- 2-3-1 -->
<?php
  $num1 = 7 + 3;
  $num2 = 7 - 3;
  $num3 = 7 * 3;
  $num4 = 7 / 3;
  $num5 = 7 % 3;
  $num6 = 7 ** 3;
?>
<p>加算：<?=$num1?></p>
<p>減算：<?=$num2?></p>
<p>乗算：<?=$num3?></p>
<p>除算：<?=$num4?></p>
<p>あまり：<?=$num5?></p>
<p>累乗：<?=$num6?></p>

<?php $num = 7;?>
<?php $added = ++$num;?>
<p>前置インクリメント時のnum：<?=$num?></p>
<p>前置インクリメント時のadded：<?=$added?></p>
<?php $num = 7;?>
<?php $added = $num++;?>
<p>後置インクリメント時のnum：<?=$num?></p>
<p>後置インクリメント時のnum：<?=$added?></p>

<!-- 2-3-2 -->
<?php
  $arr1 = ['a','b'];
  $arr2 = ['d','e','f'];
  $mergedA = $arr1 + $arr2;
  $mergedB = $arr2 + $arr1;
  $mergedC = array_merge($arr1, $arr2);
  $mergedD = array_merge($arr2, $arr1);
?>
<p>●配列の合成結果：</p>
* mergedA:<?php print_r($mergedA)?> <br>
* mergedB:<?php print_r($mergedB)?> <br>
* mergedC:<?php print_r($mergedC)?> <br>
* mergedD:<?php print_r($mergedD)?>

<?php
  $arr3 = [
    'a' => 'value A',
    'b' => 'value B'
  ];
  $arr4 = [
    'a' => 'value C',
    'b' => 'value D',
    'c' => 'value E'
  ];
  $mergedE = $arr3 + $arr4;
  $mergedF = $arr4 + $arr3;
  $mergedG = array_merge($arr3, $arr4);
  $mergedH = array_merge($arr4, $arr3);
?>
<p>●連想配列の合成結果：</p>
* mergedE:<?php print_r($mergedE)?> <br>
* mergedF:<?php print_r($mergedF)?> <br>
* mergedG:<?php print_r($mergedG)?> <br>
* mergedH:<?php print_r($mergedH)?>

<!-- 2-3-3 -->
