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