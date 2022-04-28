<?php

session_start();

function isLoggedIn()
{
  if (isset($_SESSION['user_id'])) {
    return true;
  } else {
    return false;
  }
}

function logAction($actionName)
{
  $telemetryModel = new telemetryActionModel();
  $ip_addr = getIPAddress();
  $userId = null;
  if (isLoggedIn()) {
    $userId = $_SESSION['user_id'];
  }
  $timestamp = time();

  $data = [
    'action_name' => $actionName,
    'timestamp' => $timestamp,
    'ip_address' => $ip_addr,
    'admin_id' => $userId
  ];
  return $telemetryModel->createAction($data);
}

function getIPAddress()
{
  //whether ip is from the share internet  
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  }
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  //whether ip is from the remote address  
  else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

?>