<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['email'];


// Формирование письма
$title = "Новое обращение Best Tour Plan";
$body = "
<h2>Новое обращение</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br><br>
<b>Сообщение:</b><br>$message
";

// Формирование письма для подписки
$titleNewsLetter = "Новое подписка на сайте Best Tour Plan";
$bodyNewsLetter = "
<h2>Новое подписка на сайте Best Tour Plan</h2>
<b>Подписка:</b> $email<br>
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'vgaribian83@gmail.com'; // Логин на почте
    $mail->Password   = 'Dfputy0712'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('vgaribian83@gmail.com', 'Вазген Гарибян'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('vgaribian@mail.ru');  

    // Отправка сообщения
    if(isset($name)){
        $mail->isHTML(true);
        $mail->Subject = $title;
        $mail->Body = $body;}
    else {
        $mail->isHTML(true);
        $mail->Subject = $titleNewsLetter;
        $mail->Body = $bodyNewsLetter;
    }   

    // Проверяем отравленность сообщения
    if ($mail->send()) {$result = "success";} 
    else {$result = "error";}

    } catch (Exception $e) {
        $result = "error";
        $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
    }

    // Отображение результата
    header('Location: thankyou.html');
    // echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);

