<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'sdi1400107';

$conn = mysqli_connect($host,$username,$password,$db);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>