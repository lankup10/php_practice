<?php

// 課題１
$name = "Yuka";

if ($name === "Tatsuya") {
    echo "私は" . $name . "です。";
} else {
    echo "あなたの名前ではありません" . "\n";
}

// 課題２
$sum = 0;
for ($i = 0; $i <= 10000; $i++) {
    $sum += $i;
}

echo $sum . "\n";

// 課題３
$fruits = ["apple","banana","grape","orange","lemon",];

foreach ($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}

// 課題４
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for ($i = $start; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if ($i % 5 === 0) {
    echo $i;
    echo "\n";
  }
}
?>