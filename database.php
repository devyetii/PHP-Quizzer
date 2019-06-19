<?php 
$conn = mysqli_connect('localhost', 'root', '', 'quizzer');

if (mysqli_errno()) {
    die("Failed to connect to MySQL: " . mysqli_error());
}
?>