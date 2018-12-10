<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$what = $_POST['what'];
$form = $_POST['form'];
$question = $_POST['question'];

$to = "www@k5220.ru";
$to2 = "vovs03@mail.ru";
$to3 = "info@baraban16.ru";

$subject = "Заявка с сайта Baraban16 v. 2.1.1";

$headers = "MIME-Version: 1.0\r\n";
$headers = "Content-type: text/html;charset=utf-8 \r\n";
 
$subject = "".htmlspecialchars($what)." - Запрос с www.Baraban16.ru";
$message = "
Форма: ".htmlspecialchars($form)."<br />
Посетитель хочет: ".htmlspecialchars($what)."<br />
Имя клиента: ".htmlspecialchars($name)."<br />
Email: ".htmlspecialchars($email)."<br />
	Телефон: <a href='tel:$phone'><b>".htmlspecialchars($phone)."</b><br />
".htmlspecialchars($question)."</a>";

$headers = "From: baraban16.ru <www@k5220.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
mail ($to2, $subject, $message, $headers);
mail ($to3, $subject, $message, $headers);
header ('Location: spasibo-za-zayavku.html');
exit();
?>