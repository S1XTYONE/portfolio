<?php 
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['dop']) && isset($_POST['skype'])) {
$name = $_POST['name'];
$email = $_POST['mail'];
$dop = $_POST['dop'];
$name = htmlspecialchars(trim($name));
$email = htmlspecialchars(trim($email));
$dop = htmlspecialchars(trim($dop));
$yourmail = "racer3229@gmail.com";
$sub = "Новый заказ";
$message = "Имя: $name \n E-mail: $mail \nДоп. инфо: \n$dop";
$sendmail = mail ($yourmail,$sub,$message,$mail);
if ($sendmail == 'true'){
echo '<script type="text/javascript">// <![CDATA[
alert(\'Сообщение отправлено!\');
// ]]></script>';
}
else {
echo '<script type="text/javascript">// <![CDATA[
alert(\'Ошибка! Сообщение не отправлено.\');d
// ]]></script>';
}
}
echo '<script type="text/javascript">// <![CDATA[
document.location.href="/";
// ]]></script>'
?>