<?php
session_destroy();
unset($_SESSION["id"]);
unset($_SESSION["Full_Name"]);
header("Location: login.php");
?>