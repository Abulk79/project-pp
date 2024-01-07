<?php
    $name = $_POST['name'];
    $tel = $_POST['telephone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $currentDateTime = date('Y-m-d H:i:s');

    // Создаем строку с данными
    $data = "Дата и время: " . $currentDateTime .  "\nИмя: " . $name . "\nТелефон: " . $tel ."\nПочта: " . $email . "\nСообщение: " . $message . "\n\n";

    // Указываем путь к файлу, в который будем записывать данные
    $file = 'new_data.txt';

    // Открываем файл для записи (если файл не существует, он будет создан)
    $handle = fopen($file, 'a');

    // Записываем данные в файл
    fwrite($handle, $data);

    // Закрываем файл
    fclose($handle);


?>