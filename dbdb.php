<?php
$host = 'localhost';
$user = 'root';
$pw = 'haesu6135';
$dbName = 'final';
​
$mysqli = new mysqli($host, $user, $pw, $dbName);
​
$uName=$_POST['id'];
$uContent=$_POST['text'];
$date=$_POST['date'];
​
if($db) {
echo '[연결실패] : '.mysql_error().'';
} else {
echo '[연결성공]';
}
​
?>