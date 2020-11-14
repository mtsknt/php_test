<?php

require('../../app/helper/methods.php');
validateToken();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

$body = <<<EOT

件名:
{$_SESSION['subject']}

名前:
{$_SESSION['name']}

メールアドレス:
{$_SESSION['email']}

電話番号:
{$_SESSION['phone']}

お問い合わせ内容:
{$_SESSION['message']}

EOT;

$mail = new PHPMailer(TRUE);
$mail->IsSMTP();
// $mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->CharSet = 'utf-8';
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->IsHTML(false);
$mail->Username = 'contactform93@gmail.com';
$mail->Password = 'contact#93';
$mail->SetFrom('contactform93@gmail.com');
$mail->From = 'contactform93@gmail.com';
$mail->Subject = 'お問い合わせ内容の確認';
$mail->Body = $body;
$mail->AddAddress($_SESSION['email']);

if($mail->Send()){
  // echo 'mail was sent.';
  array_push($_SESSION['notice'], 'お問い合わせが完了しました。(Mail)');
} else {
  // echo $mail->ErrorInfo;
  array_push($_SESSION['notice'], 'Something went wrong!(Mail)');
}

header('Location: ' . $prefix . $domain . '/complete.php');
exit;

?>

