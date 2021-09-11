<?php

echo "<h1>へい</h1>";

?>


<?php $total = 1500*1.08?>
<p>税込金額は：<?php echo $total;?>円です。</p>

<?php $total = 100;
  echo '結果：',$total,'円<br>'; 
  // 結果： 100 円 変数 と 値 を「 つなげ た 結果 を」 出力 する

  print '結果：'.$total.'円'; 
  // 結果： 100 円変数 と 値 を「 つなげる こと なく 順々 に」 出力 する
?>

<p><?php var_dump($total);?></p> <!-- データ型をだす -->
