<?php
$hname ='localhost';
$uname ='root';
$pass ='';
$db ='hrs';


$con =mysqli_connect($hname,$uname,$pass,$db);
if(mysqli_connect_error()){
    echo"<script>alert('cannot connect to the database');</script>";
    exit();
}
?>