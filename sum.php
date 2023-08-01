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

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function a($a){
    $result = $a * 2;
    return $result;
}
echo "課題a(100):" . a(100);
echo "\n";


//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function b($a, $b){
    $result = $a + $b;
    return $result;
}
echo b(3, 1);
echo "\n";


//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
function multiply($arr){
    $result = 1;
    foreach($arr as $num){
        $result *= $num;
    }
    return $result;
}
echo multiply(array(1,3,5,7,9));
echo "\n";


//4.下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr){
    //とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        //ここで配列の中の1番大きい値を探したい
        if ($max_number < $a){
            $max_number = $a;
        } 
    }
    return $max_number;
}
$arr = array(2, 10, 5, 8);
echo max_array($arr);
echo "\n";


//5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
//strip_tags文字列からHTML及びPHPタグを取り除く
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

//array_push一つ以上の要素を配列の最後に追加する
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
echo "\n";

//array_merge一つ、または、複数の配列をマージする
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "\n";

//time, mktime日付をUnixのタイムスタンプとして取得する
$lastday = mktime(0, 0, 0, 3, 0, 2000);
echo strftime("Last day in Feb 2000 is: %d", $lastday);
echo "\n";

//dateUnixタイムスタンプを書式化する
$timestamp = strtotime('2017-4-1 10:20:30');
echo date('Y年m月d日 H時i分s秒', $timestamp);
echo "\n";