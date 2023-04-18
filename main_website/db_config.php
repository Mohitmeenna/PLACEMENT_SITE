<?php

session_start();

$db_host = "localhost";
  $db_name = "mini_project";
  $db_user = "root";
  $db_pass = "12345qaz";
  $db_conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
}

?>