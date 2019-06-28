<?php 
    if (isset($_POST["first_name"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["message"])) { 

        $result = array(
            'email' => $_POST["email"]
        ); 
    
        
        echo json_encode($result); 
    }
  
	$to = "greed2kk@gmail.com"; 
    $from = "no-reply@portfolio.net"; 


	$first_name = $_POST['first_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
    $subject = "Форма отправки сообщений с сайта https://yaricklaba.000webhostapp.com/";
	

if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("<br /> Е-mail адрес не существует");
}
	

$mail_to_myemail = "Здравствуйте! 
Было отправлено сообщение с сайта! 
Имя отправителя: $first_name 
E-mail: $email 
Номер телефона: $phone 
Текст сообщения: $message 
Чтобы ответить на письмо, создайте новое сообщение, скопируйте электронный адрес и вставьте в поле Кому.";	
	
$headers = "From: $from \r\n";
	

    mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
    

?>