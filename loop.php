<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>for loop</h1>

<?php

echo "<br>";

for($i=0 ; $i<10 ; $i++){
    echo (2*$i+1)*10;
    echo "<br>";
}

?>

<h1>while</h1>
<?php
$score=30;
$counter=0;
while($score<60){
    $score=$score+10;
    $counter++;
}

echo $score;
echo "<br>";
echo $counter;

?>

<h1>陣列</h1>
<div>['a','b','good','sad','join',123,999]</div>

<?php
$a=['a','b','good','sad','join',123,999,'a','b','good','sad','join',123,999,'a','b','good','sad','join',123,999,'a','b','good','sad','join',123,999];

echo $a[0];
echo "<br>";
echo $a[1];
echo "<br>";
echo $a[2];
echo "<br>";
echo "<br>";

for($i=0;$i<count($a);$i++){
    echo $a[$i];
    echo "<br>";
}

echo "<br>";

$b = ['姓名' => "沈怡孜", '數學' => 90, '國文' => 80, '英文' => 85];

// 使用 array_keys() 取得 $b 陣列中的所有鍵
$keys = array_keys($b);

for ($i = 0; $i < count($keys); $i++) {
    $key = $keys[$i];
    $value = $b[$key];  // 將 $x[$key] 修改為 $b[$key]
    echo $key . ': ' . $value . '<br>';
    
}

echo "<br>";

$b=['姓名'=>"沈怡孜",'數學'=>90,'國文'=>80,'英文'=>85];


foreach($b as $keys => $value){
    echo $key . ': ' . $value . '<br>';
}

?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>




</body>
</html>