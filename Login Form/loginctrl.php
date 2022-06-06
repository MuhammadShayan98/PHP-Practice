<?php
include 'registrationdb.php';
session_start();

if (isset($_POST['submit'])) {
    $User_Name = $_POST['User_Name'];
    $User_Password = $_POST['User_Password'];
    $Role_id = $_POST['Role_id'];

    $sql = mysqli_query($conn, "SELECT * FROM tbl_Users WHERE User_Name ='$User_Name' and User_Password = '$User_Password' ");
    $result = mysqli_fetch_array($sql);
    
    if ($result) {
        // header("location: dashboard.php");
        if ($Role_id == 1) {
            header("location: ./pages/page1.php");
        } elseif ($Role_id == 2) {
            header("location: ./pages/page2.php");
        } elseif ($Role_id == 3) {
            header("location: ./pages/page3.php");
        }
    }
     else {
        echo "You enter wrong username and password";
    }
}
