<?php
session_name('login');
session_start ();
$_SESSION['login']="";
session_destroy();
header('location:../index.php');

?>