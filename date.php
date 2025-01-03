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

$day=strtotime("2021-10-5 12:09:05");
echo date("Y年m月d日",$day);
echo "<br>";
echo date("m月d日",$day);
echo "<br>";
echo date("Y-m-d H:i:s",$day);
echo "<br>";
echo date("Y-m-d H:",$day).ltrim(date("i:",$day),'0').ltrim(date("s",$day),'0');
echo "<br>";


$day_of_week=date("w",$day);
if($day_of_week == 6 && $day_of_week == 0){
    echo "今天是西元".date("Y年m月d日",$day). " 休假日";
}else{
    echo "今天是西元".date("Y年m月d日",$day). " 上班日";
}

echo "<br><br>";

?>

<h2>利用迴圈來計算連續五個周一的日期</h2>
<ul>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>

<?php
$start_day_stamp=strtotime("2021-10-04");

$day_of_week_array=[
    0 => ['min'=>'日','short'=>'周日','fulltext'=>'星期日'],
    1 => ['min'=>'一','short'=>'周一','fulltext'=>'星期一'],
    2 => ['min'=>'二','short'=>'周二','fulltext'=>'星期二'],
    3 => ['min'=>'三','short'=>'周三','fulltext'=>'星期三'],
    4 => ['min'=>'四','short'=>'周四','fulltext'=>'星期四'],
    5 => ['min'=>'五','short'=>'周五','fulltext'=>'星期五'],
    6 => ['min'=>'六','short'=>'周六','fulltext'=>'星期六'],
];

for($n=0; $n<5; $n++){
    $each_day_stamp=strtotime("+$n weeks",$start_day_stamp);
    $each_day_of_week=date("w",$each_day_stamp);
    echo $n+1 .". ". date("Y-m-d",$each_day_stamp) . " " .$day_of_week_array[$each_day_of_week]['fulltext'] . "<br>";
}


echo "<br><br>";





?>

<h2>劉老師作法</h2>
<?php


$weekString=[
    'Monday'=>['min'=>'一','short'=>'周一','fulltext'=>'星期一'],
    'Tuesday'=>['min'=>'二','short'=>'周二','fulltext'=>'星期二'],
    'Wednesday'=>['min'=>'三','short'=>'周三','fulltext'=>'星期三'],
    'Thursday'=>['min'=>'四','short'=>'周四','fulltext'=>'星期四'],
    'Friday'=>['min'=>'五','short'=>'周五','fulltext'=>'星期五'],
    'Saturday'=>['min'=>'六','short'=>'周六','fulltext'=>'星期六'],
    'Sunday'=>['min'=>'七','short'=>'周日','fulltext'=>'星期日']
    ];
echo date("Y年m月d日");
echo "<br>";
echo date("m月d日 l");
echo "<br>";
echo date("m月d日").$weekString[date("l")]['min'];
echo "<br>";
echo date("m月d日").$weekString[date("l")]['short'];
echo "<br>";
echo date("m月d日").$weekString[date("l")]['fulltext'];
echo "<br>";
echo "今天是西元".date("Y年m月d日");
if(date("N")>5){
echo "假日";
}else{
echo "上班日";
}
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
<h3><?php echo date("m月");?></h3>
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
    .grey-text{
        color:#999;
    }
    .today{
        background:blue;
        color:white;
        font-weight:bolder;
    }
    
</style>


<table>
<tr>
    <td>日</td>
    <td>一</td>
    <td>二</td>
    <td>三</td>
    <td>四</td>
    <td>五</td>
    <td>六</td>
</tr>
<?php
echo date("Y-m-d");
$firstDay=date("Y-m-01");
$firstDay_stamp=strtotime($firstDay);

$week_firstDay=date("w", $firstDay_stamp);
$start_stamp=strtotime("-$week_firstDay days",$firstDay_stamp);

for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        echo "<td>";
        echo date("j",$start_stamp);
        $start_stamp=strtotime("+1 day", $start_stamp);
        echo "</td>";
    }
    echo "</tr>";
}




?>
</table>


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
echo date("Y-m-d");
$firstDay=date("Y-m-01");
$firstDay_stamp=strtotime($firstDay);

$week_firstDay=date("w", $firstDay_stamp);
$start_stamp=strtotime("-$week_firstDay days",$firstDay_stamp);

for($i=0;$i<6;$i++){
    echo "<tr>";
    echo "<td>";
    echo $i+1;
    echo "</td>";
    for($j=0;$j<7;$j++){
        $isToday=(date("Y-m-d",$start_stamp)==date("Y-m-d"))?'today':'';
        $theMonth=(date("m",$start_stamp)==date("m",$firstDay_stamp))?'':'grey-text';
        $w=date("w", $start_stamp);
        $isHoliday=($w==0 || $w==6)?'holiday':'';
        echo "<td class='$theMonth $isToday $isHoliday'>";

        echo date("j",$start_stamp);
        $start_stamp=strtotime("+1 day", $start_stamp);


        echo "</td>";
    }
    echo "</tr>";
}


?>
</table>

<h2>再重作一次月曆</h2>



<table>
    <tr>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
        <td>日</td>
    </tr>

<?php

$day1st=date("Y-m-01");
$day1st_stamp=strtotime($day1st);
$day1st_of_week=date("w",$day1st_stamp);
$start_day_stamp=strtotime("-$day1st_of_week days",$day1st_stamp);


for($i=0; $i<6; $i++){
    echo "<tr>";

    for($j=0; $j<7; $j++){
        echo "<td>";
        echo date("j", $start_day_stamp);
        $start_day_stamp=strtotime("+1 days",$start_day_stamp);
        echo "</td>";
    }
    echo "</tr>";
}



?>

</table>

</body>
</html>