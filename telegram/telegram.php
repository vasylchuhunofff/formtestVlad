<?php

/* https://api.telegram.org/bot2024505553:AAF_8vb7y-uo3--hRQiT9UZfKc8Ecb6WsEk/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email']; 
// Сообщение
$emessage = $_POST['user_message'];
// локация
// $email = $_POST['user_email'];
$token = "2024505553:AAF_8vb7y-uo3--hRQiT9UZfKc8Ecb6WsEk";
$chat_id = "-414263460";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Сообщение' => $emessage
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>