<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link ref="stylesheet" href="./table theme.css">
</head>
<body>
    

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


    <style>
table{
    border-collapse: collapse;
    margin:20px;

}
table td, table th{
    border:1px solid #aaa;
    width:60px;
    height:30px;
    text-align: center;
}
table tr:nth-child(1){
    background:#325335;
    color:white
}
table td:nth-child(1){
    background:#325335;
    color:white
}


</style>
<?php

/*
$sub=['科目', '國文', '英文', '數學', '地理', '歷史'];
$student=['judy','amo','john','peter','hebe'];
$judy=[95, 64, 70, 90, 84];
$amo=[88, 78, 54, 81, 71];
$john=[45, 60, 68, 70, 62];
$peter=[59, 32, 77, 54, 42];
$hebe=[71, 62, 80, 62, 64];
*/

$sub=['科目', '國文', '英文', '數學', '地理', '歷史'];
$score=[];
$score[]=['judy', 95, 64, 70, 90, 84];
$score[]=['amo', 88, 78, 54, 81, 71];
$score[]=['john', 45, 60, 68, 70, 62];
$score[]=['peter', 59, 32, 77, 54, 42];
$score[]=['hebe', 71, 62, 80, 62, 64];


echo "<table>";
echo "<tr>";
foreach($sub as $subject){
    echo "<th>$subject</th>";
}
echo "</tr>";

foreach($score as $student){
    echo "<tr>";
    foreach($student as $data){
        echo "<td>$data</td>";
    }
    echo "</tr>";
}

echo "</table>";




?>


<?php

$sub=['科目', '國文', '英文', '數學', '地理', '歷史'];
$student=[];
$student[]=['judy'=>[95, 64, 70, 90, 84]];
$student[]=['amo'=>[88, 78, 54, 81, 71]];
$student[]=['john'=>[45, 60, 68, 70, 62]];
$student[]=['peter'=>[59, 32, 77, 54, 42]];
$student[]=['hebe'=>[71, 62, 80, 62, 64]];


echo"<table>";

echo"<tr>";
foreach($sub as $subject){
    echo "<td>$subject</td>";
}
echo "</tr>";



foreach($student as $data){
    foreach($data as $name => $scores){
        echo "<tr>";
        echo "<td>$name</td>";
        foreach($scores as $single_score){
            echo "<td>$single_score</td>";
        }
    }
    echo "</tr>";
}



echo"</table>";

?>



<!-- 劉老師最終版本 -->

<h2>陣列宣告</h2>    
<?php
$header=['', '國文', '英文', '數學', '地理', '歷史'];
$judy=['judy',95,64,70,90,84];
$amo=['amo',88,78,54,81,71];
$john=['john',45,60,68,70,62];
$students=[['judy',95,64,70,90,84],
           ['amo',88,78,54,81,71],
           ['john',45,60,68,70,62]];
$stus=['judy'=>[95,64,70,90,84],
           'amo'=>[88,78,54,81,71],
           'john'=>[45,60,68,70,62]];

$stus2=['judy'=>[
            '國文'=>95,
            '英文'=>64,
            '數學'=>70,
            '地理'=>90,
            '歷史'=>84],
        'amo'=>[
            '國文'=>88,
            '英文'=>78,
            '數學'=>54,
            '地理'=>81,
            '歷史'=>71],
        'john'=>[
            '國文'=>45,
            '英文'=>60,
            '數學'=>68,
            '地理'=>70,
            '歷史'=>62]];

/* foreach($array as $idx => $value){
    echo "index => ". $idx .": value =>".$value;
    echo "<br>";
}
foreach($array2 as $key => $value){
    echo "index => ". $key .": value =>".$value;
    echo "<br>";
}
 */

?>

<hr>
<?php 
$tmp=$stus2;
echo "<pre>";
print_r($stus2);
echo "</pre>";
$keys=array_keys($stus2);
$first=array_shift($stus2);
$header=array_keys($first);
array_unshift($header,'學生');

$nstu=array_merge([$first],array_values($stus2));

echo "<pre>";
echo "nstu<br>";
print_r($nstu);
echo "</pre>";
echo "<pre>";
print_r($keys);
echo "</pre>";
echo "<pre>";
print_r($header);
echo "</pre>";
//echo $key;
//$stus2[$key]=$first;
$tt=[];
foreach($keys as $idx => $name){
    $tt[$name]=$nstu[$idx];
}

echo "<pre>";
echo "tt<br>";
print_r($tt);
echo "</pre>";
?>
<table>
    <tr>
        <?php
    foreach($header as $value){   
        echo "<td>{$value}</td>";
    }
?>  
    </tr>
    <?php
    foreach($tt as $name => $student){
        echo "<tr>";
        echo "<td>";
        echo $name;
        echo "</td>";
        foreach($student as $score){
            echo "<td>{$score}</td>";
        }   
        echo "</tr>";
    }
    ?>
</table>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>