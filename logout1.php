<?php
session_start();
session_destroy();
header("location:adminpanel.php");
?>