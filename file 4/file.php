<?php
$directory = "/home/anastiuk/Downloads/test";

function getDirContents($dir, &$results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;

}

$some =getDirContents($directory);

foreach ($some as $k){
  rename($k,mb_strtolower($k));
  echo $k;
}