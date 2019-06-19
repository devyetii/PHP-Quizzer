<?php 
$db_host = 'localhost';
$db_name = 'quizzer';
$db_user = 'root';
$db_pass = (string)'';

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($mysqli->connect_error) {
    printf("Connection Failed : %s\n", $mysqli->connect_error);
    exit();
}
?>