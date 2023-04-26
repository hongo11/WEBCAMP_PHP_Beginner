<?php

// 初期値「０,１」
$a = 0;
$b = 1;
echo "$a \n"; // 初期値「0」
echo "$b \n"; // 初期値「0」

// ループ
for ($i = 2; $i < PHP_INT_MAX; $i++) {
    $c = $a + $b;
    echo $c."\n";

    // 「値が１万を超える」ところまで出力する
    if ($c > 10000) {
        break;
    }
    $a = $b;
    $b = $c;
}