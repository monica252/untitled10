<?php
$value = 10;
$value;
echo $value;

$value = 10;


--$value;
echo $value;
$value=10;
$value += 5;
echo $value;

$value = "banana";
$value .= "apple";
echo $value;

// (論理演算) ? (論理演算結果が真の時の値) : (論理演算結果が偽の時の値)
$value = 10;
// ()内の結果が正しい場合、 :より左側が代入され、()内の結果が間違っている場合は:より右側が代入される
$result = ($value < 20) ? '$value は 20 より小さい' : '$value は 20 と等しいかまたは大きい';

echo $result;
//=> $value は 20 より小さい と表示される
