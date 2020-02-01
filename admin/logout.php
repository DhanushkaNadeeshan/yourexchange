<?php
session_start();
unset($_SESSION["user"]); 
unset($_SESSION["request"]); 
header("Location: http://" . $_SERVER['HTTP_HOST'] . "/yourexchange/admin/");
?>
