<?php 
    require_once '../php/database.php';
    session_destroy();
    header("location:../index.php");
    exit();
?>