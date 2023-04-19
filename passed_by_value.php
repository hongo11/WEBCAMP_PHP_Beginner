<?php

// 関数の宣言
function myFunc(int $val)
{
    // $valの値を２倍にする
    $val *= 2; // "$i : 2"と同じ意味を持つ、複合演算子という書き方です
    // 値を確認する
    echo "in myFunc, i is {$val} \n";
}

// 変数への代入
$i = 10;
// 関数の実行
myFunc($i);
// 変数 i の中身の確認
echo "i is {$i} \n";