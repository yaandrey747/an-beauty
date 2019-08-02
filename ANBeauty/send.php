<?php

$message-name = $_POST['message-name'];
$message-email = $_POST['message-email'];
$message = $_POST['message'];

$message-name = htmlspecialshars($message-name);
$message-email = htmlspecialshars($message-email);
$message = htmlspecialshars($message);

$message-name = urldecode($message-name);
$message-email = urldecode($message-email);
$message = urldecode($message);

$message-name = trim($message-name);
$message-email = trim($message-email);
$message = trim($message);

echo $message-name;
echo "<br>";
echo $message-email;
echo "<br>";
echo $message;
echo "<br>";

if(mail("semyanova_95@mail.ru", "Сообщение с сайта A&N Beauty", "Имя:".$message-name.". E-mail:".$message-email." Сообщение: ".$message, "From: an-beauty64.ru \r\n")){
	echo "Сообщение успешно отправлено";

} else {
	echo "При отправке сообщения возникли проблемы";
}
?>



