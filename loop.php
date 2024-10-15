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


<?php
/*
$array[1,2,3,4]
$array2=['a'=>10,'b'=>12,'c'=>13];
foreach($array as $idx => $value){
    echo "index => ". $idx .":value =>".$value;
    echo "<br>";
}
*/

$header=['', '國文', '英文', '數學', '地理', '歷史'];
$judy=['judy', 95, 64, 70, 90, 84];
$amo=['amo', 88, 78, 54, 81, 71];
$john=['john', 45, 60, 68, 70, 62];
$peter=['peter', 59, 32, 77, 54, 42];
$hebe=['hebe', 71, 62, 80, 62, 64];


?>

<style>
.nine{
    border-collapse:collapes;
    margin:20px;

}
.nine td{
    border:1px solid #aaa;
    width:30px;
    height:30px;
    text-align: center;
}
.nine tr:nth-child(1){
    background:#325335;
    color:white
}
.nine td:nth-child(1){
    background:#325335;
    color:white
}

</style>

<table>
    <tr>
        <?php
        foreach ($header as $value){
            echo "<td>{$value}</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        foreach ($judy as $value){
            echo "<td>{$value}</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        foreach ($amo as $value){
            echo "<td>{$value}</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        foreach ($john as $value){
            echo "<td>{$value}</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        foreach ($peter as $value){
            echo "<td>{$value}</td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        foreach ($hebe as $value){
            echo "<td>{$value}</td>";
        }
        ?>
    </tr>


</body>
</html>