<?php
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$f_name = $_POST['fn'];
$l_name = $_POST['ln'];
$skype = $_POST['s'];
$phone = $_POST['p'];
$message = $_POST['m'];

  $to  = 'pavelvp2182@yandex.ru'; 
  $mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';                                               // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@mastervision.su'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'PS5QLRLfwxsSBGsv74FamLfP'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('info@mastervision.su'); // от кого будет уходить письмо?
$mail->addAddress($to);     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Сообщение со страницы https://mastervision.su/personal-consultation/';
$mail->Body    = '<p>Имя: ' . $f_name . '</p><p>Фамилия: ' . $l_name . '</p><p>Skype: '.$skype . '</p><p>Телефон: '.$phone . '</p><p>Сообщение: '.$message . '</p>';
$mail->AltBody = '';

if($mail->send()) {
  echo 'Спасибо! Мы получили Ваше сообщение и скоро свяжемся с Вами';
} else {
  echo 'Что-то пошло не так, попробуйте ещё раз';
}
 ?>
