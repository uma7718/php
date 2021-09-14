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
<p><?=floor((0.1+0.7)*10);?></p>
<p><?=((0.1+0.7)*10);?></p>

<p><?php echo sprintf('%.50f',(0.1+0.7)*10);?></p>

<?php
  $result1 = floor((0.1+0.7)*10);
  $result2 = floor((string)(0.1+0.7)*10);
  // BCMathのモジュールが入ってなかった
  // $result3 = floor((int)bcmul(bcadd(0.1,0.7,2),10,2));
?>
<h4>(0.1 + 0.7) * 10 の切り捨ての計算結果</h4>
<p>result1：<?=$result1?></p>
<p>result2：<?=$result2?></p>
<p>result3：<?=$result3?></p>


<!-- 2-3-5 -->
<?php
  $sum = 3;
  $sum *= 5;

  $greeting = 'Hello';
  $greeting .= 'World.';
?>
<p>sum：<?=$sum?></p>
<p>greeting：<?=$greeting?></p>

<!-- 2-3-6 -->
<?php
  $greeting1 = 'Hello';
  $greeting2 = &$greeting1;
  $greeting1 = 'World';
?>
<p>greeting1：<?=$greeting1?></p>
<p>greeting2：<?=$greeting2?></p>

<!-- 2-3-7 -->
<?php
  $a = 3;
  $b = 5;
  var_dump($a < $b);
  var_dump($b < $a);
?>
<br>
<?php $point = 85;?>
<?php
  var_dump($point == 85);
  var_dump($point == '85');
  var_dump($point === 85);
  var_dump($point === '85');
  var_dump($point != 85);
  var_dump($point != '85');
  var_dump($point !== 85);
  var_dump($point !== '85');
  var_dump($point > 85);
  var_dump($point >= 85);
  var_dump($point > '85');
  var_dump($point >= '85');
?>
<br>

<!-- 2-3-8 -->
<?php
  $a = 1.2340;
  $b = 1.2345;

  var_dump(abs($a - $b) < 0.1);
  var_dump(abs($a - $b) < 0.01);
  var_dump(abs($a - $b) < 0.001);
  var_dump(abs($a - $b) < 0.0001);
  var_dump(abs($a - $b) < 0.00001);
?>

<!-- 2-3-9 -->
<?php $point = 85;?>
<?php
  var_dump($point <=> 85);
  var_dump($point <=> 70);
  var_dump($point <=> 99);
?>

<!-- 2-3-10 -->
<p><?php
  $a = -100;
  echo $a < 0 ? 0:$a;

  $a = 100;
  echo $a < 0 ? 0:$a;
?></p>

<p>
  <?php
    $a = null;
    echo $a ?? 'default value';
    $a = 'SOME VALUE';
    echo $a ?? 'default value';
  ?>
</p>

<pre>
<?php
  $greeting = null;
  $message = $greeting === null ? 'Hello':$greeting;
  echo 'あいさつは', $message, PHP_EOL;

  $greeting = 'Good Morning';
  $message = $greeting === null ? 'Hello':$greeting;
  echo 'あいさつは', $message, PHP_EOL;

  $greeting = null;
  $message = $greeting ?? 'Hello';
  echo 'あいさつは', $message, PHP_EOL;

  $greeting = 'Good Morning';
  $message = $greeting ?? 'Hello';
  echo 'あいさつは', $message, PHP_EOL;

?>
</pre>

<!-- 2-3-11 -->
<p>
<?php
  $num = -1;
  var_dump($num === null || $num < 0);
  
  $num = null;
  var_dump($num === null || $num < 0);

  $num = 1;
  var_dump($num === null || $num < 0);
?>
</p>

<p>
<?php
  $temperature = 39;

  $isSuitable = $temperature >= 40 && $temperature <= 41;
  var_dump($isSuitable);
  
  $isNotSuitable = $temperature < 40 || $temperature > 41;
  var_dump($isNotSuitable);
  
  $isNotSuitable = !($temperature >= 40 && $temperature <= 41);
  var_dump($isNotSuitable);
?>
</p>

<!-- 2-3-12 -->
<p>
<?php
  $a = true;
  $b = false;
  $c = false;
  var_dump($a || $b && $c); // true
  var_dump($a || $b); // true
  var_dump($b && $c); // false
  var_dump(($a || $b) && $c); // false
  var_dump($a || $b and $c); // false
  var_dump($b || $c); // false
  var_dump($a && $b); // false
?>
</p>

<!-- 2-3-13 -->
<p>
<?php
$t = true;
$f = false;

$t && print(1);
$f && print(2);
$t || print(3);
$f || print(4);
?>
</p>

<p>
<?php
  // define('URL_BASE', 'http://www.example.com');

  define('URL_BASE') || define('URL_BASE', 'http://default.example.com');
  echo 'URL_BASE is:',URL_BASE;
?>
</p>
<p>
  define(~) || die('エラーメッセージ'); <br>
  これは定義されていなかったらエラーメッセージがでるというイディオム
</p>

<!-- 2-3-14 -->
<?php
  define('BIT_RED', 1 << 0);
  define('BIT_BLUE', 1 << 1);
  define('BIT_YELLOW', 1 << 2);
  define('BIT_GREEN', 1 << 3);

  $colors = 0;
  $colors = $colors | BIT_BLUE;
  $colors = $colors | BIT_YELLOW;
  $colors = $colors & ~ BIT_BLUE;
  echo base_convert($colors, 10, 2);

  var_dump(($colors & BIT_RED) > 0);
  var_dump(($colors & BIT_BLUE) > 0);
  var_dump(($colors & BIT_YELLOW) > 0);
  var_dump(($colors & BIT_GREEN) > 0);
?>

<p>
<?php
  define('BIT_RED', 1 << 0); //0001
  define('BIT_BLUE', 1 << 1); // 0010
  define('BIT_YELLOW', 1 << 2); // 0100
  define('BIT_GREEN', 1 << 3); // 1000

  $colors = 0;

  $colors = BIT_BLUE | BIT_YELLOW; //0110

  $statuses = [
    'red' => ($colors & BIT_RED) > 0,
    'blue' => ($colors & BIT_BLUE) > 0,
    'yellow' => ($colors & BIT_YELLOW) > 0,
    'green' => ($colors & BIT_GREEN) > 0
  ];
?>
<p>赤のボタンはONですか？<?php var_dump($statuses['red']);?></p>
<p>青のボタンはONですか？<?php var_dump($statuses['blue']);?></p>
<p>黄のボタンはONですか？<?php var_dump($statuses['yellow']);?></p>
<p>緑のボタンはONですか？<?php var_dump($statuses['green']);?></p>
</p>

<!-- 2-4-1,2 -->
<?php
  $point = 55;
  $message = '通常スコアです。';
  if ($point >= 80) {
    $message = 'ハイスコアです。';
  } elseif($point >= 50) {
    $message = 'ミドルスコアです。';
  }
?>
<p>メッセージ：<?=$message?></p>

<?php
  $bool1 = false;
  $bool2 = true;
  $bool3 = true;
  if($bool1 === true) {
    echo '$bool1は真です。';
  }elseif($bool2 === true) {
    echo '$bool2は真です。';
  }elseif($bool3 === true) {
    echo '$bool3は真です。';
  }
?>
<?php
  $bool1 = false;
  $bool2 = true;
  $bool3 = true;
  if($bool1 === true) {
    echo '$bool1は真です。';
  }
  if($bool2 === true) {
    echo '$bool2は真です。';
  }
  if($bool3 === true) {
    echo '$bool3は真です。';
  }
?>

  <!-- 2-4-3 -->
<?php
  $point = 99;
  if($point >= 80) {
    $message = 'ハイスコアです。';
  } elseif($point >= 50) {
    $message = 'ミドルスコアです。';
  } else {
    $message = '通常スコアです。';
  }
?>
<p>メッセージ：<?=$message?></p>

<!-- 2-4-4 -->
<?php
  if($num === 100)
  if($greeting ==='Hello')
  if($connected !== true)

  if($connected)
  if(!$connected)

  if(is_numeric($var))
  if(isset($var))

  if($point >= 50 && $point <= 80)
  if($greeting === 'Helllo' || $greeting === 'Good Morning')

  if($num)
  if($answer)
  if(count($arr))
?>

<?php
  $point = 90;
  if($point >= 80){
    $message = 'ハイスコアです。';
  }else{
    $message = '通常スコアです。';
  }
?>
<p>メッセージ：<?=$message?></p>

<?php
  $point = -30;
  if($point < 0 || $point > 100){
    $message = 'ポイント値が不正です。';
  }else{
    $message = 'ポイント値は正常です。';
  }
?>
<p>メッセージ：<?=$message?></p>

<?php
  $point = '90A';
  if(is_numeric($point)){
    $message = 'ポイントは数値です。';
  }else{
    $message = 'ポイントが数値ではありません。';
  }
?>
<p>メッセージ：<?=$message?></p>

<?php
  $point = '90A';
  if(!is_numeric($point)){
    $message = 'ポイントが数値ではありません。';
  }else{
    $message = 'ポイントは数値です。';
  }
?>
<p>メッセージ：<?=$message?></p>

<?php
  $place = ['東京', '京都', 'ニューヨーク'];
  if(count($place)){
    $message = '場所が１つ以上存在します。';
  }else{
    $message = '場所が１つも存在しません。';
  }
?>
<p>メッセージ：<?=$message?></p>

<!-- 2-4-5 -->
<?php
  if(!$a)
  // これらはif文に入る
  $a = [];
  $a = 0;
  $a = '0';
?>
<?php
  if($a == '')
  $a = []; // 入らない
  $a = 0; // 入る
  $a = '0'; // 入らない
?>
<?php
  if(empty($a))
  // if(!$a) と全く同じ
?>
<?php
  if(!isset($a)) // 変数が定義されており、nullでないときの反対(!)
  // または
  if(is_null($a)) // 変数が未定義、nullのとき
  $a = '' // でもこれはif文に入らない
?>
<?php
  if(is_null($a) || $a === '')
  $a = '';
  $a = null;
  // $a が未定義
  // この３つのときだけif文に入る。これが最強
?>

<?php
  $value = '0';
  if(!$value){
    echo '変数は空です。'.PHP_EOL; // 誤判定
  }else{
    echo '変数は空ではありません。'.PHP_EOL;
  }
?>

<?php
  $value = 0;
  if($value == ''){
    echo '変数は空です。'.PHP_EOL; // 誤判定
  }else{
    echo '変数は空ではありません。'.PHP_EOL;
  }
?>

<?php
  $value = '0';
  if(empty($value)){
    echo '変数は空です。'.PHP_EOL; // 誤判定
  }else{
    echo '変数は空ではありません。'.PHP_EOL;
  }
?>

<?php
  $value = null;
  if($value === ''){
    echo '変数は空です。'.PHP_EOL;
  }else{
    echo '変数は空ではありません。'.PHP_EOL; //nullだけどこっちに入る
  }
?>

<?php
  $value = '';
  if(is_null($value)){
    echo '変数は空です。'.PHP_EOL;
  }else{
    echo '変数は空ではありません。'.PHP_EOL; // 空文字だけどこっちに入る
  }
?>

<?php
  $value = null;
  if(is_null($value) || $value === ''){
    echo '変数は空です。'.PHP_EOL; // ここに入る
  }else{
    echo '変数は空ではありません。'.PHP_EOL;
  }
?>

<?php
  $value = '';
  if(is_null($value) || $value === ''){
    echo '変数は空です。'.PHP_EOL; // ここに入る
  }else{
    echo '変数は空ではありません。'.PHP_EOL;
  }
?>

<?php
  $value = 0;
  if(is_null($value) || $value === ''){
    echo '変数は空です。'.PHP_EOL;
  }else{
    echo '変数は空ではありません。'.PHP_EOL; // ここに入る
  }
?>

<!-- 2-4-6 -->
<?php
  $message = '';
  $extension = 'gif';
  switch($extension){
    case 'jpg';
      $message = 'jpg画像です。';
      break;
    case 'png';
      $message = 'png画像です。';
      break;
    case 'gif';
      $message = 'gif画像です。';
      break;
    case 'bmp'; // if($extensin == 'bmp' || $extension == 'svg') と同じ意味
    case 'svg';
      $message = 'bmpまたはsvg画像です。';
      break;
    default;
      $message = 'その他の形式です。';
  }
?>
<p>メッセージ：<?=$message?></p>


<?php
  // breakがないとあとのcase文も処理される
  $number = 1;
  switch($number){
    case 0;
      echo 'number=0の処理<br>';
    case 1;
      echo 'number=1の処理<br>';
    case 2;
      echo 'number=2の処理<br>';
    default;
      echo 'defaultの処理<br>';
  }
?>

<!-- 2-4-7 -->
<?php
/* 
  exit;
  exit(ステータスコード);
  exit(1);
  die('エラーメッセージ');
  die();
*/
?>

<?php
/*
  $score = -100;
  if($score < 0){
    echo 'スコアは正の数でなければなりません。';
    exit(1);
  }
  echo 'スコアは：',$score,'点です。';
*/
?>

<?php
/*
  $score = -100;
  if($score < 0){
    die('dieスコアは正の数でなければなりません。');
  }
  echo 'スコアは：',$score,'点です。';
*/
?>

<!-- 2-5-1 -->
<?php
  $colors = ['赤','青','黄'];
  foreach($colors as $color) {
    echo "<p>{$color}</p>";
  }
?>

<?php
  $colors = [
    'red' => '赤',
    'blue' => '青',
    'yellow' => '黄'
  ];
  foreach($colors as $key => $value){
    echo "<p>キー：{$key} 値：{$value}</p>";
  }
?>

<?php
  $colors = ['赤','青','黄'];
  foreach($colors as $key => $value){
    echo "<p>キー：{$key} 値：{$value}</p>";
  }
?>

<!-- 2-5-2 -->
<?php
  $numbers = [3,5,-1,2];
  foreach ($numbers as &$number){
    if($number < 0){
      $number = 0;
    }
  }
  unset($number);
?>
<pre><?php print_r($numbers);?></pre>

<?php
  $colors = [
    'red' => '赤',
    'blue' => '青',
    'yellow' => '黄'
  ];
  foreach ($colors as $key => &$value){
    $value ='カラー名：'.$value;
  }
  unset($value);
?>
<pre><?php print_r($colors);?></pre>

<!-- 2-5-3 -->
<?php
  $numbers = [3,5,-1,2];
  foreach ($numbers as &$number){
    if($number < 0){
      $number = 0;
    }
  }
  $number = 100;
  // unset($number);
?>
<pre><?php print_r($numbers);?></pre>

<!-- 2-5-4 -->
<?php
  for($i = 0; $i < 5; $i++){
    echo $i,PHP_EOL;
  }
?>

<pre>
<?php
  for($i = 1; $i <= 3; $i++){
    echo "Hello!({$i}回目)".PHP_EOL;
  }
?>
</pre>

<!-- 2-5-5 -->
<pre>
<?php
  $lines = [
    'いろはにほへと',
    'ちりぬるを',
    'わかよたれそ',
  ];
  for ($lineNumber = 1; $lineNumber <= count($lines); $lineNumber++){
    echo $lineNumber,'行目：',$lines[$lineNumber -1],PHP_EOL;
  }
?>
</pre>

<!-- 2-5-6 -->
<pre>
<?php
  for($i = 0; $i < 3; $i++) {
    for($j = 0; $j < 2; $j++){
      echo '$i:',$i,'$j:',$j,PHP_EOL;
      if($i === 2 && $j === 1){
        echo 'これが最後のループ処理です。',PHP_EOL;
      }
    }
  }
?>
</pre>

<!-- 2-5-7 -->
<pre>
<?php
  $num = 100;
  while ($num < 200){
    echo $num,PHP_EOL;
    $num += 30;
  }
  echo '$numが200を超えたためループを抜けました。';
?>
</pre>

<!-- 2-5-8 -->
<pre>
<?php
  $total = 0;
  $numbers = [10,2,-5,3,'abc',6,1];
  echo '正の整数を対象に入れるの要素を足し算します。',PHP_EOL;
  foreach($numbers as $number){
    if(!is_numeric($number)){
    echo "数値ではない値を検出したため計算を中断します。（対象値：{$number}）",PHP_EOL;
      break;
    }
    if($number < 0){
      echo "マイナス値は計算しません。（対象値：{$number}）",PHP_EOL;
      continue;
    }
    $total += $number;
  }
  echo "■合計値：{$total}",PHP_EOL;
?>
</pre>

<!-- 2-5-9 -->
<?php $colors = ['red','gray','yellow'];?>
<?php foreach ($colors as $color){?>
  <?php if ($color === 'red'){?>
    <span style="color:red">赤</span>
  <?php } elseif ($color === 'yellow'){?>
    <span style="color:yellow">黄</span>
  <?php }else{?>
    <span style="color:black">その他</span>
  <?php } ?>
<?php } ?>

<?php $colors = ['red','gray','yellow'];?>
<?php foreach ($colors as $color):?>
  <?php if ($color === 'red'):?>
    <span style="color:red">赤</span>
  <?php elseif ($color === 'yellow'):?>
    <span style="color:yellow">黄</span>
  <?php else:?>
    <span style="color:black">その他</span>
  <?php endif ?>
<?php endforeach ?>

<!-- 2-6 -->
<?php
  function calculateAge($today, $birthday)
  {
    $age = floor(($today - $birthday) / 10000);
    return $age;
  }
  $age = calculateAge(20181213, 19790101);
  echo $age,(歳);
?>

<!-- 2-6-1 -->
<pre>
<?php
  function add ($a, $b){
    $total = $a + $b;
    return $total;
  }
  $result = add(3, 10);
  echo '計算結果：', $result,PHP_EOL;

  $result = add(5, 2);
  echo '計算結果：', $result,PHP_EOL;
?>
</pre>

<!-- 2-6-2 -->
<?php
  function add1 ($a, $b){
    if($a <= 0){
      echo '引数aは正の数で指定してください。';
      return;
    }
    if($b <= 0){
      echo '引数bは正の数で指定してください。';
      return;
    }
    $total = $a + $b;
    echo '合計は',$total;
    return $total;
  }
  $total = add1(5,-5);
  echo $total;
?>

<?php
  function findImageExtension($extensions)
  {
    foreach($extensions as $extension){
      if($extension == 'jpg' || $extension == 'gif' || $extension == 'png'){
        return $extension;
      }
    }
    return 'NOT FOUND';
  }

  $extensions = ['pdf','jpg','docx','gif','exe'];
  $findImageExtension = findImageExtension($extensions);
  echo $findImageExtension;
?>

<!-- 2-6-3 -->
<?php
  function checkNumber($value)
  {
    return is_numeric($value) && (int)$value > 0;
  }

  function add2($a, $b)
  {
    if(!checkNumber($a) || !checkNumber($b)){
      return 'INVALID';
    }
    $total = $a + $b;
    return $total;
  }

  $result = add2(3,10);
  echo "<p>計算結果：{$result}</p>";
  $result = add2(5,-4);
  echo "<p>計算結果：{$result}</p>";

  $value = checkNumber(-4);
  echo var_dump($value);
?>

<!-- 2-6-4 -->
<?php
function add3($a){
  $a += 10;
}
$argument = 5;
add3($argument);
echo '$argumentは',$argument,'です。';
?>

<?php
function add4(&$a){
  $a += 10;
}
$argument = 5;
add4($argument);
echo '$argumentは',$argument,'です。';
?>

<pre>
<?php
  function checkNumber1($value)
  {
    return is_numeric($value) && (int)$value > 0;
  }

  function add5($a, $b, &$errorMessage)
  {
    if(!checkNumber1($a)){
      $a = 0;
      $errorMessage = '(※エラー：１番目の引数が正の整数でない。)';
    }
    if(!checkNumber1($b)){
      $b = 0;
      $errorMessage = '(※エラー：２番目の引数が正の整数でない。)';
    }
    $total = $a + $b;
    return $total;
  }

  $errorMessage = null;
  $result = add5(3,10, $errorMessage);
  echo '計算結果：',$result, $errorMessage, PHP_EOL;

  $errorMessage = null;
  $result = add5(4,-5, $errorMessage);
  echo '計算結果：',$result, $errorMessage, PHP_EOL;
?>
</pre>

<!-- 2-6-5 -->
<?php // 汎用性が低い
  function add6($a, $b)
  {
    $total = $a + $b;
    echo "<p>計算結果:{$total}</p>";
  }
  add6(3,10);
  add6(5, 2);
?>

<!-- 2-6-6 -->
<?php

?>