<?php

require('../app/helper/methods.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  
  $_SESSION['subject']  = filter_input(INPUT_POST, 'subject');
  $_SESSION['name']     = trim(filter_input(INPUT_POST, 'name'));
  $_SESSION['email']    = trim(filter_input(INPUT_POST, 'email'));
  $_SESSION['phone']    = trim(filter_input(INPUT_POST, 'phoneNumber'));
  $_SESSION['message']  = trim(filter_input(INPUT_POST, 'message'));
  
  if($_SESSION['error'] !== []){
    $_SESSION['error'] = [];
  };

  if($_SESSION['subject'] === '---'){
    array_push($_SESSION['error'], 'subject is not selected.');
  }

  if($_SESSION['name'] === ''){
    array_push($_SESSION['error'], 'name is empty.');
  }

  if($_SESSION['email'] === ''){
    array_push($_SESSION['error'], 'email is empty.');
  } elseif(preg_match("/^.+@.+\..+$/i", $_SESSION['email']) !== 1){
    array_push($_SESSION['error'], 'email is invalid.');
  }

  if($_SESSION['phone'] === ''){
    array_push($_SESSION['error'], 'phone number is empty.');
  } elseif(preg_match("/^[0-9]{2,4}-?[0-9]{2,4}-?[0-9]{3,4}$/i", (string)$_SESSION['phone']) !== 1){
    array_push($_SESSION['error'], 'phone number is invalid.');
  }

  if($_SESSION['message'] === ''){
    array_push($_SESSION['error'], 'message is empty.');
  }

  if(count($_SESSION['error']) !== 0){
    $_SESSION['flag'] = true;
    $num = count($_SESSION['error']);
    array_unshift($_SESSION['error'], $num . ' errors containing.');
    header('Location: http://localhost:8080/index.php');
  } else {
    header('Location: http://localhost:8080/confirm.php'); 
  }
}