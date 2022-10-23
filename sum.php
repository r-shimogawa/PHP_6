<?php

function sum($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);

echo "\n";

// $array = array(2,5,9,7,3,1,8,6,4);

// // 配列を昇順（小さい順）にソートする
// asort($array);
// // print_rで表示する
// print_r($array);


// task
// 1
function multiplication($mult){
    $result = 1;
    $result = 2 * $mult;
    return $result;
}
echo multiplication(30);

echo "\n";

// 2
function add($a, $b){
    $result = $a + $b;
    return $result;
}

echo add(3, 1);
echo "\n";

// 3
function mul_2($arr)
{
    $result = array_product($arr) ;
    return $result;
}

$arr =  array(1,3,5,7,9);
echo "1,3,5,7,9をかけた数は ".mul_2($arr)." です";
echo "\n";



// 4
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $arr = array(19,988,997,3,45,);
  
  $max_number = $arr[0];
  foreach($arr as $a){
      // ここで配列の中の1番大きい値を探したい
       if ($a > $max_number) {
            $max_number = $a;
            }
      }
  return $max_number;
}

echo "配列の中で一番大きな数字は ".max_array($arr)." です";
echo "\n";

// 5

// strip_tags
$str = "<b>tech boost テックブースト</b>";
echo strip_tags($str);
echo "\n";


// array_push
$numbers = array(1,2,3,4,5);
array_push($numbers,6,7);
print_r($numbers);
echo "\n";


// array_merge
$array1 = [1,2,3];
$array2 = [4,5,6];
$array3 = [7,8,9];
$array = array_merge($array1, $array2, $array3);
print_r($array);
echo "\n";


// time, mktime, date
$time = mktime(11,23);
echo date("Y年m月d日 h時i分s秒",$time);
echo "\n";


?>

