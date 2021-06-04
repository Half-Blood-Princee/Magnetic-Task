<?php
$arrayOne = ['el', 'ab', 'cd'];
$arrayTwo = ['y5', 'y6', 'y7'];

function replaceArr($arrFirst,$arrSecond)
{
    for ($i = 0; $i < count($arrFirst); $i++) {
        $res[$i] = $arrFirst[$i] . "-" . array_reverse($arrSecond)[$i];
        echo $res[$i];
        echo '<br>';
    }
}
replaceArr($arrayOne,$arrayTwo);




