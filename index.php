<?php
function validateDate($date, $format = 'd-m-Y') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}

function saveData($name, $date) {
    if (empty($name) || empty($date)) {
        throw new Exception('Имя и дата не могут быть пустыми.');
    }
    
    if (!validateDate($date)) {
        throw new Exception('Некорректный формат даты. Используйте дд-мм-гггг.');
    }
    

}
?>