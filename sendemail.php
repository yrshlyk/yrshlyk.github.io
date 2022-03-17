<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Ваше сообщение отправлено!'
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = 'Покупатель с сайта по плитке'; 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'yrshlyk@gmail.com';

    $body = 'Имя отправителя: ' . $name . "\n" . 'Email: ' . $email . "\n\n" . 'Сообщение: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die; 