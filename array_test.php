<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h2>
    
<?php

$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];


echo "<table border='1'>";

for($i=0;$i<60;$i++){
    if($i %10 == 0){
        echo "<tr>";
    }
    echo "<td>";
    echo $sky[$i % count($sky)];
    echo $land[$i % count($land)];
    echo "</td>";
    if(($i+1) %10 == 0){
        echo "</tr>";
    }
}
echo "</table>";

$year=1930;
$i=$year - 1024;

echo $sky[$i % count($sky)];
echo $land[$i % count($land)];

 


?>
    
</body>
</html>