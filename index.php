<?php

echo "Hello World!\n";

?>

<?php

print("Hello World!\n");

?>

<?php

$name = "yamada";

echo $name."\n";

echo "Hello!!".$name;

?>

<?php

const NAME = "yada";

echo NAME."\n";

echo "Hello!!".NAME;

?>

<?php

define("TEXT" , "japanese");

echo TEXT;

?>

<?php

//変数$itemを定義し、penを格納する
$item = "pen";
echo $item;

//変数$itemの値をnoteに上書きする
$item = "note";
echo $item;

?>

<?php

$num = 5;

//$numが3より大きい、かつ7より小さいという条件
if($num > 3 && $num < 7) {    
    echo '数字は3より大きいかつ7より小さいです';
} else {
    echo '条件に当てはまりません';
}


?>

<?php

$num = 10;

//$numが3以下、または7以上という条件
if($num <= 3 || $num >= 7) {    
    echo '3以下または5以上です';
} else {
    echo '条件に当てはまりません';
}

?>

<?php

$fruits = "apple";

//比較対象をcaseの後に記述
switch($fruits) {
//比較対象と比較する値を記述
    case "banana":
        echo "バナナです";
        break;
    case "apple":
        echo "りんごです";
        break;
    case "orange":
        echo "オレンジです";
        break;
    case "mango":
        echo "マンゴーです";
        break;
    default:
        echo "不正な名前です";
}

?>

<?php

$ages = [22, 34, 12, 45];

//0番目の要素：22を取り出す
echo $ages[0];

//1番目の要素：34を取り出す
echo $ages[1];

//2番目の要素：12を取り出す
echo $ages[2];

//3番目の要素：45を取り出す
echo $ages[3];

?>

<?php

$fruits = [
    "banana" => "バナナ",
    "apple" => "りんご",
    "orange" => "みかん",
    "grape" => "ぶどう"
];

$ages = [
    "父" => 55,
    "母" => 52,
    "兄" => 33,
    "妹" => 28  
];

echo $fruits["apple"];


?>