<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
<ul>
    <li>使用亂數函式rand($a,$b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li>完成選號後將陣列內容印出</li>
</ul>

<?php


$nums=[];

while(count($nums)<6){
    $n=rand(1,38);

    if(!in_array($n, $nums)){
        $nums[]=$n;
    }    
}

foreach($nums as $num){
    echo "$num, ";
}

echo "<br>";

sort($nums);
foreach($nums as $num){
    echo "$num, ";
}

echo "<hr>";
echo join(", ",$nums) ;


echo "<h2> 使用迴圈來印出閏年 </h2>";



$leap=[];

for($i=2024; $i<=2524; $i++){
    if($i%4==0 && ($i%100 != 0 || $i %400 == 0)){
        $leap[]=$i;
    }
}
 
echo "<pre>";
print_r($leap);
echo "</pre>";


?>

<h2>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h2>
    
<?php

$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];

$sl=[];
echo "<table>";
for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<10;$j++){
        $cellnum=10*$i+$j;
        $landIndex=$cellnum%12;
        echo "<td>";
        echo $sky[$j];
        echo $land[$landIndex];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<br>";

for($i=0;$i<6;$i++){

    for($j=0;$j<10;$j++){
        $cellnum=10*$i+$j;
        $landIndex=$cellnum%12;
        $sl[]=$sky[$j].$land[$landIndex];
    }
}
$year=2034;

echo $sl[($year-4)%60];

echo "<pre>";
print_r($sl);
echo "</pre>";

?>
<h2>
請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)
</h2>
<ul>
    <li>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</li>
</ul>

<?php

$a=[2,4,6,1,8];

for($i=0; $i<=floor(count($a)/2);$i++){
    $tmp=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$tmp;
}
echo "<br>";
echo "<pre>";
print_r($a);
echo "</pre>";
echo "<hr>";
echo "<pre>";
print_r(array_reverse($a));
echo "</pre>";


$a=[2,9,3,2,0,4,8,5,1];

for($i=1; $i<=floor(count($a)/2); $i++){
    $tmp=$a[floor(count($a)/2)-$i];
    $a[floor(count($a)/2)-$i]=$a[floor(count($a)/2)+$i];
    $a[floor(count($a)/2)+$i]=$tmp;
}

echo "<br>";
echo "<pre>";
print_r($a);
echo "</pre>";
echo "<hr>";
echo "<pre>";
print_r(array_reverse($a));
echo "</pre>";

$a=[2,9,3,2,0,4,8,5,1];
$k=floor(count($a)/2);

for($i=1; $i<=$k; $i++){
    $tmp=$a[$i-$k];
    $a[$i-$k]=$a[$i+$k];
    $a[$i+$k]=$tmp;
}
echo "<br>";
echo "<pre>";
print_r($a);
echo "</pre>";
echo "<hr>";
echo "<pre>";
print_r(array_reverse($a));
echo "</pre>";


?>

</body>
</html>