<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

/*
$n=50;
echo "no=".$n."<br>";
for($i=1;$i<=$n;$i=$i=2){
    echo $i;
    echo ",";
}
echo "<br>";
*/

$n=50;
echo "n=".$n."<br>";
for($i=1;$i<=$n;$i++){
    echo $i*10;
    echo ",";

}
echo "<br>";

$n=100;
echo "n=".$n."<br>";
$count=0;

for($i=3;$i<=$n;$i++){
    $t=true;
    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }
    
    if($t==true){
        echo "$i ,";
    }   
    
}
echo "<br>";
echo $count;

echo "<br>";
echo "<br>";

$n=100;
echo "n=".$n."<br>";
$count=0;

for($i=3;$i<=$n;$i++){
    $t=true;
    for($j=2;$j<=$i/2;$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }
    
    if($t==true){
        echo "$i ,";
    }   
    
}
echo "<br>";
echo $count;

echo "<br>";
echo "<br>";

$n=100;
echo "n=".$n."<br>";
$count=0;

for($i=3;$i<=$n;$i++){
    $t=true;
    for($j=2;$j<=ceil($i/2);$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }
    
    if($t==true){
        echo "$i ,";
    }   
    
}
echo "<br>";
echo $count;

echo "<br>";
echo "<br>";

$n=100;
echo "n=".$n."<br>";
$count=0;

for($i=3;$i<=$n;$i++){
    $t=true;
    for($j=2;$j<=sqrt($i);$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }
    
    if($t==true){
        echo "$i ,";
    }   
    
}
echo "<br>";
echo $count;



?>

<?php

$n = 100; // 設定變數 n 為 100，表示我們要處理的數字範圍是 2 到 100
echo "n=" . $n . "<br>"; // 輸出 n 的值，顯示 "n=100"
$count = 0; // 初始化計數器 count 為 0，用來記錄進行的除法運算次數

for ($i = 2; $i <= $n; $i++) { // 從 2 開始
    if ($i == 2) { // 如果 i 是 2，直接輸出，因為 2 是質數
        echo "$i ,";
        continue; // 跳過本次迴圈，直接處理下一個數字
    }

    $t = true; // 假設 i 是質數
    
    // 檢查 i 是否能被 2 到 sqrt(i) 之間的數字整除
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) { // 如果 i 能被 j 整除，則 i 不是質數
            $t = false;
            break; // 一旦發現 i 不是質數，跳出迴圈
        }
        $count++; // 每次進行除法檢查時，計數器加 1
    }
    
    if ($t == true) { // 如果 t 保持為 true，表示 i 是質數
        echo "$i ,"; // 輸出質數
    }
}
echo "<br>";
echo "Total division checks: $count"; // 輸出總共進行的除法運算次數


?>




</body>
</html>

<h2>九九乘法表</h2>

<?php

for($i=1;$i<=9;$i++){
    echo "1 x $i =".(1*$i);
    echo "<br>";
}
for($i=1;$i<=9;$i++){
    echo "2 x $i =".(1*$i);
    echo "<br>";
}for($i=1;$i<=9;$i++){
    echo "3 x $i =".(1*$i);
    echo "<br>";
}for($i=1;$i<=9;$i++){
    echo "4 x $i =".(1*$i);
    echo "<br>";
}for($i=1;$i<=9;$i++){
    echo "5 x $i =".(1*$i);
    echo "<br>";
}for($i=1;$i<=9;$i++){
    echo "6 x $i =".(1*$i);
    echo "<br>";
}for($i=1;$i<=9;$i++){
    echo "7 x $i =".(1*$i);
    echo "<br>";
}for($i=1;$i<=9;$i++){
    echo "8 x $i =".(1*$i);
    echo "<br>";
}for($i=1;$i<=9;$i++){
    echo "9 x $i =".(1*$i);
    echo "<br>";
}
echo "<br>";

?>

<p>&nbsp;</P>

<?php

echo "<table border=1>";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for($i=1;$i<=9;$i++){
        echo "<td>";
        echo "$j x $i =".($i*$j);
        echo "</td> ";
    }
    echo "</tr>";
}
echo "</table>";



?>

<!-- table>tr*9>td*9 -->


<p>&nbsp;</P>


<?php

echo "<table border=1>";
echo "<tr>";
echo "<td></td>";
for($k=1;$k<10;$k++){
    echo "<td>$k</td>";
}
echo "</tr>";

for($j=1;$j<10;$j++){
    echo "<tr>";
    echo "<td>$j</td>";
    for($i=1;$i<10;$i++){
        if($j==1){
            echo "<td>$i</td>";
        }else{
        echo "<td>";
        echo ($i*$j);
        echo "</td> ";
        }
    }
    echo "</tr>";
}
echo "</table>";

?>


<p>&nbsp;</P>

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

<?php

echo "<table class='nine'>";

for($j=0;$j<10;$j++){
    echo "<tr>";
    for($i=0;$i<10;$i++){
        echo "<td>";
        if($j==0 && $i==0){
            echo "";
        }elseif($j==0){
            echo "$i";
        }elseif($i==0){
            echo "$j";
        }else{
            echo ($i*$j);
        }
        echo "</td> ";
    }
    echo "</tr>";
}
echo "</table>";

?>