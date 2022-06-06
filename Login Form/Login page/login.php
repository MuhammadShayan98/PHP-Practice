<?php
include '../registrationdb.php';
session_start();

$message = "";

if (isset($_POST['submit'])) {
    $User_Name = $_POST['User_Name'];
    $User_Password = $_POST['User_Password'];
    $Role_id = $_POST['Role_id'];

    $result = mysqli_query($conn, "SELECT * FROM tbl_Users WHERE User_Name ='$User_Name' and User_Password = '$User_Password' ");
    $row  = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["Full_Name"] = $row['Full_Name'];
    } else {
        $message = "Please First Login!";
    }
    if (isset($_SESSION["id"])) {

        if ($row) {
            // header("location: dashboard.php");
            if ($Role_id == 1) {
                header("location: ../pages/page1.php");
            } elseif ($Role_id == 2) {
                header("location: ../pages/page2.php");
            } elseif ($Role_id == 3) {
                header("location: ../pages/page3.php");
            }
        } else {
            echo "You enter wrong username and password";
        }
    }else{
         header("location : ../Login page/login.php");
    }
}





?>
<html>

<head>
    <title>User Login</title>
</head>

<style>
    input {
        padding: 8px;
        width: 30%;
        border-radius: 6px;
    }

    .Button {
        background-color: green;
        color: white;
    }
</style>

<body>
    <form name="frmUser" method="post" action="" align="center">
        <div class="message"><?php if ($message != "") {
                                    echo $message;
                                } ?></div>
        <h1 align="center"> Login </h1>
        <p>
            <select onchange="toggle_form_element(this)" name='Role_id' id="parts">
                <option value="-">Please choose</option>
                <option value="1">Student</option>
                <option value="2">Teacher</option>
                <option value="3">HOD</option>
            </select>
        </p>

        Username:<br>
        <input type="text" name="User_Name" required>
        <br>
        Password:<br>
        <input type="password" name="User_Password" required>
        <br><br>
        <input class="Button" type="submit" name="submit" value="Submit">
    </form>
</body>

</html>