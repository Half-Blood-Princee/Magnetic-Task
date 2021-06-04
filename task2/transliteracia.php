<?php
function transliteration($string)
{
    $converter = array(
        'а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'ґ'=>'g', 'д' =>'d', 'е'=>'e',
        'є'=>'ye', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'і'=>'i', 'ї'=>'yi','й'=>'y',
        'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r',
        'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'h', 'ц'=>'c', 'ч'=>'ch',
        'ш'=>'sh', 'щ'=>'sch', 'ь'=>'', 'ю'=>'yu', 'я'=>'ya',

    );
    return strtr($string, $converter);
}

echo transliteration("певна стрічка");


