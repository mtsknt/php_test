<?php

require('../app/helper/methods.php');

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

  // $sql = "SELECT * FROM contacts";
  // $stmt = $db->prepare($sql);
  // $stmt->execute();
  // $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
  // var_dump($results);
  
  header('Location: ' . $prefix . $domain . '/complete.php');

} catch (PDOException $e) {
  
  echo 'something went wrong!     ';
  echo $e->getMessage();
  exit;

}

?>