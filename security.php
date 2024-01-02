<?php
session_start();
include('dbcon.php');
if(!$_SESSION['username'])
{
    header('Location:login.php');
}
?>
