<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$a='aaddw1123';
$new=str_replace('aaddw1123','**********',$a);
echo $new;

echo "<hr>";

$b='this,is,a,book';
$n2=explode(',',$b);
print_r($n2);

echo "<hr>";

$n3=implode(' ',$n2);
echo $n3;

echo "<hr>";

$c='The reason why a great man is great is that he resolves to be a great man';
$s=substr($c, 0, 10) . "...";
echo $s;

$c='一個偉大的人之所以偉大，是因為他決心成為偉大的人。';
$k=mb_substr($c, 0, 10). "...";
echo $k;


?>

<h1>尋找字串與HTML、css整合應用</h1>
<ul>
    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>
</ul>

<?php

$str='學會PHP網頁程式設計，薪水會加倍，工作會好找'


?>


</body>
</html>