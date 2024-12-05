<?php
function findBirthdaysToday($filename) {
    $today = date('d-m');
    $file = fopen($filename, 'r');
    
    if ($file) {
        while (($line = fgets($file)) !== false) {
            list($name, $birthdate) = explode(',', trim($line));
            $birthdate = trim($birthdate);
            if (substr($birthdate, 0, 5) === $today) {
                echo "Поздравляем: $name с днем рождения!\n";
            }
        }
        fclose($file);
    } else {
        echo "Не удалось открыть файл.\n";
    }
}
?>