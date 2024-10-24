<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

date_default_timezone_set("Asia/Taipei");
$date_birth1="2025-02-26";
$timestamp1=strtotime($date_birth1);
$date_birth2="2025-02-09";
$timestamp2=strtotime($date_birth2);

$s = $timestamp1 - $timestamp2;

echo '差距秒:'. $s;

echo "<br>";

$d = $s/(60*60*24);

echo "$d";

echo "<hr>";

$date_today="2024-10-24";

$timestamp3=strtotime("+1 days".$date_today);

$s2=$timestamp1-$timestamp3;

$d2=$s2/(60*60*24);

echo "$d2";

?>

<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<li>2021/10/05</li>
<li>10月5日 Tuesday</li>
<li>2021-10-5 12:9:5</li>
<li>2021-10-5 12:09:05</li>
<li>今天是西元2021年10月5日 上班日(或假日)</li>

<?php

echo date("Y年m月d日");
echo "<br>";
echo date("m月d日 l");
echo "<br>";
echo date("Y-m-d");
echo "<br>";
echo date("m月d日");
echo "<br>";
$weekString=[
'Monday' => ['min'=> "一", 'short'=> "周一", 'fulltext'=> "星期一"],
'Tuesday' => ['min'=> "二", 'short'=> "周二", 'fulltext'=> "星期二"],
'Wednesday' => ['min'=> "三", 'short'=> "周三", 'fulltext'=> "星期三"],
'Thursday' => ['min'=> "四", 'short'=> "周四", 'fulltext'=> "星期四"],
'Friday' => ['min'=> "五", 'short'=> "周五", 'fulltext'=> "星期五"],
'Saturday' => ['min'=> "六", 'short'=> "周六", 'fulltext'=> "星期六"],
'Sunday' => ['min'=> "日", 'short'=> "周日", 'fulltext'=> "星期日"]
];

echo date("Y年m月d日");
echo "<br>";

echo date("m月d日").$weekString[date("l")]['fulltext'];
echo "<br>";

echo "<br>";

?>

<?php


for($i=0;$i<5;$i++){
    $timestamp=strtotime("+$i weeks".date("Y-m-d"));
    echo date("Y-m-d",$timestamp);
    echo "&nbsp;";
    echo $weekString[date("l")]['fulltext'];
    echo "<br>";
}
?>


<h2>線上月曆製作</h2>
<ul>
    <li>以表格方式呈現整個月份的日期</li>
    <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
    <li>嘗試以block box或flex box的方式製作月曆</li>
</ul>

<style>
    table{
        border-collapse:collapse;
    }
    td{
        padding: 5px 10px;
        text-align: center;
        border: 1px solid #999;
    }
    .holiday{
        background:pink;
        color:#999;
    }
</style>
<table>
<tr>
    <td></td>
    <td>日</td>
    <td>一</td>
    <td>二</td>
    <td>三</td>
    <td>四</td>
    <td>五</td>
    <td>六</td>
</tr>


<?php

$d=strtotime("2024-6");
$firstDayWeek=date("w",strtotime(date("Y-m-1")));

for($i=0; $i<6; $i++){
    echo "<tr>";
    echo "<td>";
    echo $i+1;
    echo "</td>";
    for($j=0; $j<7; $j++){
        echo "<td>";
        $dayNum=$i*7 + $j -$firstDayWeek;
        $theDayTime=strtotime("$cell days".$firstDay);
        echo date("d",$theDayTime);
        echo "</td>"; 
    }
    echo "</tr>";
}




?>
<table>
<tr>
    <td></td>
    <td>日</td>
    <td>一</td>
    <td>二</td>
    <td>三</td>
    <td>四</td>
    <td>五</td>
    <td>六</td>
</tr>
<?php
$firstDay=date("Y-m-1");
$firstDayTime=strtotime($firstDay);
$firstDayWeek=date("w",strtotime(date("Y-m-1")));

for($i=0; $i<6; $i++){
    echo "<tr>";
    echo "<td>";
    echo $i+1;
    echo "</td>";
    for($j=0; $j<7; $j++){
        echo "<td>";
        $cell=$i*7+$j;
        $theDayTime=strtotime("+$cell day".$firstDay);
        echo date("Y-m-d",$theDayTime);
        echo "</td>";         
    }
    echo "</tr>";
}


?>
<?php



?>

    
</table>
</body>
</html>