$total = 0;
echo $total;
//=> 0 と表示される。

// $iが0から始まり、$iが１００以下の間繰り返し処理をおこなう。
for ($i = 0; $i <= 100; $i++) {
  $total += $i;
}
echo $total;
