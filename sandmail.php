<?php

/* https://api.telegram.org/bot5815655194:AAFNkn6R_yQCyIvxEDxTO9pU_4cqtzeH1cM/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['_user_name'];
$phone = $_POST['_user_phone'];
$email = $_POST['_user_email'];
$message =$_POST['message'];
$token = "5815655194:AAFNkn6R_yQCyIvxEDxTO9pU_4cqtzeH1cM";
$chat_id = "-950096955";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'message' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: test.html');
} else {
  echo "Error";
}
?>
