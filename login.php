 <?php
include "connect.php"

$login_email = $_GET["email"];
$login_password = $_GET["psw"];

$sql = INSERT INTO login_table ('AccountID', 'email', 'password') VALUES (NULL, '$login_email', '$login_password');
  ?>