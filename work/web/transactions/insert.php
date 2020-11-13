<?php

require('../../app/helper/methods.php');

if($_SESSION['notice'] !== []){
  $_SESSION['notice'] = [];
}

try{

  $dsn = "mysql:host=mysql;dbname=skillcheck;";
  $db = new PDO(
    $dsn,
    'root',
    'root',
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false,
    ]
  );

  $sql = "INSERT INTO contacts (subject, name, email, phone, message) VALUES (?, ?, ?, ?, ?)";
  $stmt = $db->prepare($sql);
  $stmt->execute([
    $_SESSION['subject'],
    $_SESSION['name'],
    $_SESSION['email'],
    (string)$_SESSION['phone'],
    $_SESSION['message']
  ]);
  
  array_push($_SESSION['notice'], 'お問い合わせが完了しました。(DB)');
  header('Location: ' . $prefix . $domain . '/transactions/sendmail.php');
  exit;

} catch (PDOException $e) {

  // echo $e->getMessage();
  array_push($_SESSION['notice'], 'something went wrong!(DB)');
  header('Location: ' . $prefix . $domain . '/transactions/sendmail.php');
  exit;
}

?>