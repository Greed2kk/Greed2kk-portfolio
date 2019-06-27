<?php

if(isset($_POST['submit'])){
$to = "draiver78@mail.ru";
$from = $_POST['userEmail']; 
$first_name = $_POST['userName'];
$user_phone = $_POST['userPhone']; //обработать
$subject = "Форма отправки сообщений с сайта";
$subject2 = "Copy of your form submission";
$message = $first_name . " оставил сообщение:" . "\n\n" . $_POST['userMsg'];
$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['userMsg'];


$headers = "From:" . $from;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", Я скоро прочитаю его ;).";
echo "<br /><br /><a href='https://greed2kk.github.io/'>Вернуться на сайт.</a>";

}

?>

<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://greed2kk.github.io/");}
window.setTimeout("changeurl();",3000);
</script>