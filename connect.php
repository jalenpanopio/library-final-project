 <?php
    $host= 'localhost';
    $user= 'root';
    $pass= '';
    $database= 'login';

    $mysqli = new $mysqli($localhost, $root, $pass, $login);
    echo $mysqli->host_info . "\n";
  ?>