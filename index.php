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