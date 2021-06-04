<?php

$buf=implode("",file("https://dou.ua/"));

preg_match_all
("~<a.*href\s*=\s*[\"']([^\"']+)[\"'][^>]*>~i",
    $buf,$url);

echo "<div>Url</div>";
$arrUrl=[];
while($i<count($url[1])) { array_push($arrUrl, @$url[1][$i++]); }
foreach ($arrUrl as $n => $row) {
    echo $row . "<br>\r\n";
}

preg_match_all("~<img.*src\s*=\s*[\"']([^\"']+)[\"'][^>]*>~i",
    $buf,$images);

echo "<div>Picture</div>";
$arrImg=[];
while($k<count($images[1])) { array_push($arrImg, @$images[1][$k++]); }
foreach ($arrImg as $n => $row) {
    echo $row . "<br>\r\n";
}


