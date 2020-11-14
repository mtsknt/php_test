<?php

$error_messages = $_SESSION['error'] ?? [];

$url_from = $_SERVER['HTTP_REFERER'] ?? NULL;
$flag = ($_SESSION['flag'] ?? false) || preg_match('/confirm.php/i', $url_from);
$_SESSION['flag'] = false;

if ($flag === true) {
  $subject = $_SESSION['subject'] ?? 'ご意見';
  $name    = $_SESSION['name'] ?? '';
  $email   = $_SESSION['email'] ?? '';
  $phone   = $_SESSION['phone'] ?? '';
  $message = $_SESSION['message'] ?? '';
} else {
  $subject = 'ご意見';
  $name    = '';
  $email   = '';
  $phone   = '';
  $message = '';
}