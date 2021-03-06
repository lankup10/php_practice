<?php

// 課題１
function twice($num) {
    $result = $num * 2;
    return $result;
}

echo twice(392) . "\n";


// 課題２
function sum($a, $b) {
    $result2 = $a + $b;
    return $result2;
}

echo sum(5, 9) . "\n";


// 課題３
$array = [1, 3, 5, 7, 9];

function kadai03($arr) {
    $result3 = $arr[0]; // $result = 0; としてしまうと、28行目が0に対する乗算となり、いつまでも積が0になる
    
    for ($i = 1; $i < count($arr); $i++) {
        // 25行目で配列の１つ目の要素から始めたので、ここでは２つ目の要素から始める//
        $result3 *= $arr[$i];
    }
    return $result3;
}

echo kadai03($array) . "\n";


// 課題４
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
    if ($max_number < $a) {
        $max_number = $a;
    } 
 }

 return $max_number;
 }

$arr = array(15, 39, 45);
echo max_array($arr) . "\n";


// 課題５
$str = "<p>テストテスト</p>";
echo $str . "\n";
echo strip_tags($str) . "\n";

$array5 = ["apple", "orange", "melon"];
echo $array5[0] . $array5[1] . $array5[2];
array_push($array5, "grape", "peach");
echo $array5[0] . $array5[1] . $array5[2]. $array5[3] . $array5[4];

$array6 = [1, 2, 3];
$array7 = [10, 20, 30];
$array8 = [100, 200, 300];
$array9 = array_merge($array6, $array7, $array8);
print_r($array9);

echo time() . "\n";

$time = mktime(12,34,56,5,14,1988);
var_dump(date('Y年m月d日h時i分s秒', $time));
echo "\n";

echo date("Y/m/d H:i:s") . "\n";
?>