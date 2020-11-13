<?php

$error_messages = $_SESSION['error'] ?? [];

$url_from = $_SERVER['HTTP_REFERER'] ?? NULL;
$flag = ($_SESSION['flag'] ?? false) || preg_match('/confirm.php/i', $url_from);
$_SESSION['flag'] = false;

$subject = ($flag === true) ? $_SESSION['subject'] : 'ご意見';
$name    = ($flag === true) ? $_SESSION['name'] : '';
$email   = ($flag === true) ? $_SESSION['email'] : '';
$phone   = ($flag === true) ? $_SESSION['phone'] : '';
$message = ($flag === true) ? $_SESSION['message'] : '';