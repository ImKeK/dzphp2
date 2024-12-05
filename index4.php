<?php
$filename = 'birthdays.txt';

try {
    // Пример сохранения данных
    saveData('Василий Васильев', '05-06-1992');

    // Поиск пользователей с днем рождения сегодня
    findBirthdaysToday($filename);

    // Удаление записи
    deleteEntry($filename, 'Василий Васильев');

} catch (Exception $e) {
    echo 'Ошибка: ' . $e->getMessage();
}

?>