<?php
//$helloWorldという変数にHello Worldという文字列を格納し出力してください。
$helloWorld = 'Hello World';

echo $helloWorld;
?>

<?php
// 配列に松,竹,梅を格納し、
// 梅を出力してください。
$lesson2 = ['松', '竹', '梅'];

echo $lesson2 [2]. "<br>";
?>

<?php
// 連想配列のkey
// name, age, genderに
// 山田,  20,  女性
// という値を格納し、

// 山田
// 20歳・女性

// という形で出力してください。
$lesson3 = [
	'name' => '山田' ,
	'age' => '20歳・' ,
	'gender' => '女性' ,
];

echo $lesson3['name']. "<br>";
echo $lesson3["age"];
echo $lesson3["gender"] . "<br>";
?>