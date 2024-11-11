<?php
$forma_obrashchenya="Форма обращения родителей";
error_reporting(E_ERROR);
if (isset($_POST[name])) {
 $name=$_POST[name];
 if($name=='') {
  unset($name);
 }
}
if (isset($_POST[email])) {
 $email=$_POST[email];
 if($email=='') {
  unset($email);
 }
}
if (isset($_POST[phone])) {
 $phone=$_POST[phone];
 if($phone=='') {
  unset($phone);
 }
}

if (isset($name)) {
 $name=stripslashes($name);
 $name=htmlspecialchars($name);
}
if (isset($email)) {
 $email=stripslashes($email);
 $email=htmlspecialchars($email);
}
if (isset($phone)) {
 $phone=stripslashes($phone);
 $phone=htmlspecialchars($phone);
}

$address="Tadayasu@yandex.ru"
$note_text="Имя: $name \r\n Почта: $email \r\n Телефон: $phone \r\n "

if (isset($name)) {
 mail($address, $forma_obrashchenya, $note_text, "Content-type:text/plain; windows-1251");

echo "<p>форма отправлена<p>"
}?>
