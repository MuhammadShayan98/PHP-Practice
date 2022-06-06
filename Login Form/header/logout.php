<?php

if (isset($_POST['logout'])) {
    // session_destroy();
    // unset($_SESSION["id"]);
    // unset($_SESSION["Full_Name"]);
    // header('Location:../Login page/login.php');
    // die();
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["Full_Name"]);
    header('Location:../Login page/login.php');
};
