<?php

function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}


function redirectRoot(){
  $_SESSION['error'] = ['Invalid access.'];
  header('Location: ' . $prefix . $domain . '/index.php');
  exit;
}

function createToken(){
  if(!isset($_SESSION['token'])){
    $_SESSION['token'] = bin2hex(random_bytes(32));
  }
}

function validateToken(){
  if(empty($_SESSION['token']) || $_SESSION['token'] !== $_SESSION['user_token']){
    redirectRoot();
  }
}

session_start();

$prefix = empty($_SERVER['HTTPS']) ? 'http://' : 'https://';
$domain = $_SERVER['HTTP_HOST'] ?? 'exampe.com';