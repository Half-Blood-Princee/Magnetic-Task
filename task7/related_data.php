<?php
$conn = new mysqli("localhost", "root", "", "magneto2");

$result = mysqli_query($conn, 'SELECT magneto2.categories.c_name, magneto2.products.p_name FROM magneto2.products join magneto2.associations ON magneto2.associations.p_id = magneto2.products.p_id join magneto2.categories ON magneto2.associations.c_id = magneto2.categories.c_id');
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

$filePath = fopen('file.csv', 'w');

foreach ($row as $i => $value) {
    fputcsv($filePath,$row[$i]);
}
fclose($filePath);
