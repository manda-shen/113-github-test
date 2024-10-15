<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>

</head>
<body>
    
<?php


for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo"*";
    }
    echo "<br>";
}



?>

<hr>

<h2>直角三角形</h2>
 <?php 

for($i=0;$i<5;$i++){
    for($j=0;$j<($i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h2>倒直角三角形</h2>
 <?php 

for($i=5;$i>0;$i--){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h2>正三角形</h2>
 <?php 

for($i=0;$i<5;$i++){

    for($k=0;$k<4-$i;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<(2*$i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<h2>倒三角形</h2>
<?php 

for($i=0;$i<5;$i++){

    for($k=0;$k<$i;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<(9-2*$i);$j++){ //$j<(2*(4-$i)+1)
        echo"*";
    }
    echo "<br>";
}

?>
<?php 

for($i=4;$i>=0;$i--){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<(2*$i+1);$j++){ 
        echo"*";
    }
    echo "<br>";
}

?>

<?php 

for($i=5;$i>0;$i--){

    for($k=0;$k<(5-$i);$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<(2*$i-1);$j++){ 
        echo"*";
    }
    echo "<br>";
}

?>


<h2>菱形</h2>
<?php 

for($i=0;$i<21;$i++){
    if($i>10){
        /* $t=$i-4;
        $i-4     => 1,2,3,4
        2*($i-4) => 2,4,6,8
        $i       => 5,6,7,8
        2*($i-(2*($i-4)))+1 => 7, 5 , 3,1
        2*($i-(2$i-8))+1
        2*(8-$i)+1
        17-2$i */

        for($k=0;$k<$i-10;$k++){
            echo "&nbsp;";
        }
    
        for($j=0;$j<2*($i-(2*($i-10)))+1;$j++){
            echo "*";
        }
        echo "<br>";

    }else{

        for($k=0;$k<10-$i;$k++){
            echo "&nbsp;";
        }
    
        for($j=0;$j<(2*$i+1);$j++){
            echo "*";
        }
        echo "<br>";
    }

}

?>
<h2>菱形</h2>
 <?php 
for($i=0;$i<21;$i++){
    if($i>10){
        $k1=$i-10;
        $j1=2*($i-(2*($i-10)))+1;
    }else{
        $k1=10-$i;
        $j1=(2*$i+1);
    }

    for($k=0;$k<$k1;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$j1;$j++){
        echo "*";
    }
    echo "<br>";

}
?>

<h2>矩形</h2>
<?php 

$width=7;

for($i=0;$i<$width;$i++){
    for($j=0;$j<$width;$j++){
        echo "*";
    }
    echo "<br>";
}


?>

<h2>矩形</h2>
<?php 


$width=7;

for($i=0;$i<$width;$i++){
    for($j=0;$j<$width;$j++){
        if($i==0 || $i==$width-1){
            echo "*";
        }elseif($j==0 || $j==$width-1){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

echo "<br>";

for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        if($i==1 && $j==2){
            echo "&nbsp;";
        }elseif($i==2 && $j==1){
            echo "&nbsp;";
        }elseif($i==2 && $j==3){
            echo "&nbsp;";
        }elseif($i==3 && $j==2){
            echo "&nbsp;";
        }else{
            echo "*";
        }
    }
    echo "<br>";
}

echo "<br>";


for($i=0;$i<6;$i++){
    for($j=0;$j<6;$j++){
        if($i==0 || $j==0){
            echo "*";
        }elseif($i==5 || $j==5){
            echo "*";
        }elseif($i==$j ||$i+$j==5){
            echo "*";
                }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "<br>";


$li=15;

for($i=1;$i<=$li;$i++){
    for($j=1;$j<=$li;$j++){
        if($i==1 || $j==1){
            echo "*";
        }elseif($i==$li || $j==$li){
            echo "*";
        }elseif($i==$j ||$i+$j==$li+1){
            echo "*";
                }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

echo "<br>";


$li=15;

for($i=1;$i<=$li;$i++){
    for($j=1;$j<=$li;$j++){
        if($i==1 || $i==$li){
            echo "*";
        }elseif($j==1 || $j==$li){
            echo "*";
        }elseif($i==$j ||$i+$j==$li+1){
            echo "*";
                }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


?>
<h2>菱形</h2>
 <?php 


$w=9;
$k=ceil($w/2);

for($i=1;$i<=$w;$i++){
    for($j=1;$j<=$w;$j++){
        if($i==$k || $j==$k){
            echo "*";
        }elseif(($i+$j)==$k+1 || abs($i-$j)==($k-1) ||($i+$j)==($w+$k)){
            echo "*";
                }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

/*上列方法遇到偶數會出現問題，所以改成下面方式。*/

echo "<br>";

$k=8;
$w=($k*2)-1;

for($i=1;$i<=$w;$i++){
    for($j=1;$j<=$w;$j++){
        if($i==$k || $j==$k){
            echo "*";
        }elseif(($i+$j)==$k+1 || abs($i-$j)==($k-1) ||($i+$j)==($w+$k)){
            echo "*";
                }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


//劉老師的方法

echo "<br>";

$size=9;

for($i=0;$i<$size;$i++){
    if($i>(floor($size/2))){
        $k1=$i-(floor($size/2));
        $j1=2*($i-(2*($i-(floor($size/2)))))+1;
    }else{
        $k1=(floor($size/2))-$i;
        $j1=(2*$i+1);
    }
    
    for($k=0;$k<$k1;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$j1;$j++){
        if($j==0 || $j==$j1-1 || $i==(floor($size/2)) || $j==floor(($j1-1)/2)){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo"<br>";
}

?>




<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>