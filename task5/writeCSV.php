<?php
$a1 = array(
    'name' => 'some name',
    'age' => 5,
    'city' => 'some town'
);

$a2 = array(
    'age' => 6,
    'country' => 'small country',
    'city' => 'mego city',
    'street' => 'cute ave.'
);
$a3 = array_merge($a1, $a2);
$a4 = array();
foreach (array_merge(array_keys($a1), array_keys($a2)) as $key) {
    if (isset($a1[$key]) && isset($a2[$key])) {
        $a4[$key] = $a1[$key] . " " . $a2[$key];
    } else {
        $a4[$key] = (isset($a1[$key]) ? $a1[$key] : $a2[$key]);
    }
}
$filePath = fopen('file.csv', 'w') or die('Error1');

fputcsv($filePath, array_keys($a3));
fputcsv($filePath,$a4);

fclose($filePath);