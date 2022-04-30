<?php

//勇者のhp
$brave_hp = 30;
//勇者の攻撃力
$brave_attack = 10;
//勇者の防御力
$brave_defense = 5;
//敵のhp
$enemy_hp = 30;
//敵の攻撃力
$enemy_attack = 5;
//敵の防御力
$enemy_defense = 10;

//敵に与えるダメージの計算
$enemy_damage = $brave_attack - $enemy_defense;

//敵のHPにダメージを与える
$enemy_hp = $enemy_hp - $enemy_damage;

//敵に与えるダメージと残りHPの表示
echo "敵に".$enemy_damage."のダメージを与えた。\n";
echo "残りHPは".$enemy_hp."だ。";

//残りHPによってリアクションを変える
if($enemy_hp > 20){
  echo "敵は元気だ";
}elseif($enemy_hp > 10){
  echo "敵はちょっと弱っている";
}elseif($enemy_hp > 5){
  echo "敵はかなり弱っている";
}elseif($enemy_hp > 0){
  echo "敵は瀕死だ";
}else{
  echo "敵はしんだ";
}

?>