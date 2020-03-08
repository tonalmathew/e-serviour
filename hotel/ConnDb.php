<?php 
$_servername="localhost";
$_username="root";
$_password="";
$_dbname="hotel";
$conn=MySqli_connect($_servername,$_username,$_password,$_dbname);
if(!$conn)
{
    die("connection faild".MySqli_connect_error());
}
 
?>
