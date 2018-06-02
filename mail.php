<?php

    $msg = "Имя: " . $_POST['fio'] . "\n";
    $msg = "Возраст: " . $_POST['age'] . "\n";
    $msg = "ИНТЕРЕСУЮЩИЙ ФОРМАТ УЧАСТИЯ: " . $_POST['format'] . "\n";
    $msg = "СМЕНА: " . $_POST['perion'] . "\n";
    $msg = "Город: " . $_POST['city'] . "\n";
    $msg = "Телефон: " . $_POST['phone'] . "\n";
    $msg = "Email: " . $_POST['mail'] . "\n";
    $msg = "ОТКУДА ВЫ УЗНАЛИ О ПРОЕКТЕ?: " . $_POST['where'] . "\n";
    $msg = "Я согласен(на) на обработку персональных данных: " . $_POST['personalData'] . "\n";
    $msg = "Я согласен(на получать новостную рассылку): " . $_POST['accept'] . "\n";

    $msg = wordwrap($msg, 70);

    $subject = "Заявка с сайта кинолагерь.рф";

    mail("kinocamp@mail.ru", $subject, $msg);
?>

<h1>Спасибо за оставленную заявку!</h1>
