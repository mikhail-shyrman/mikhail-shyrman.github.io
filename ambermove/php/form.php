<?php

if (array_key_exists('text', $_POST)) {
   $to = 'h4nt3rrr@gmail.com';
   $subject = 'Заполнена контактная форма с '.$_SERVER['HTTP_REFERER'];
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = "Имя: ".$_POST['name']."\nEmail: ".$_POST['email']."\nIP: ".$_SERVER['REMOTE_ADDR']."\nСообщение: ".$_POST['text'];
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
   mail($to, $subject, $message, $headers);
   echo $_POST['name'];
}


//------------------


//$name = $_POST['name'];
//$email = $_POST['email'];
//
//$name = htmlspecialchars($name);
//$email = htmlspecialchars($email);
//
//$name = urldecode($name);
//$email = urldecode($email);
//
//$name = trim($name);
//$email = trim($email);
//
////echo $name;
////echo "<br>";
////echo $name;
//
//if (mail("h4nt3rrr@gmail.com", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email ,"From: example2@mail.ru \r\n")) //исправить почту
// {     echo "сообщение успешно отправлено"; 
//} else {
//    echo "при отправке сообщения возникли ошибки";
//}


//-----------------------
?>


