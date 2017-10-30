<?php
/*
Author: Javed Ur Rehman
Website: https://htmlcssphptutorial.wordpress.com
*/
?>

<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('register');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>
