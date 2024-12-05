<?php
function deleteEntry($filename, $searchTerm) {
    $file = file($filename);
    $found = false;

    foreach ($file as $key => $line) {
        if (strpos($line, $searchTerm) !== false) {
            unset($file[$key]);
            $found = true;
            break;
        }
    }

    if ($found) {
        file_put_contents($filename, implode("", $file));
        echo "Запись удалена.\n";
    } else {
        echo "Запись не найдена.\n";
    }
}
?>