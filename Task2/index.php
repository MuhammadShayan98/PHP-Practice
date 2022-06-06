<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $fnameErr = "";
    $lnameErr = "";
    $passwordErr = "";
    $emailErr = "";
    $genderErr = "";
    $feildErr = '';
    $commentErr = '';
    $companyErr = '';

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        if (empty($_POST["fname"])) {
            $fnameErr = "* first Name is required";
        } else {
            $fname = test_input($_POST['fname']);

            if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
                $fnameErr = "* Only letter are allowed";
            }
        }
        if (empty($_POST["lname"])) {
            $lnameErr = "* Second Name is required";
        } else {
            $lname = test_input($_POST['lname']);

            if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
                $lnameErr = "* Only letter are allowed";
            }
        }
        if (empty($_POST["password"])) {
            $passwordErr = "* Password is required";
        }

        if (empty($_POST["email"])) {
            $emailErr = "* Email is required";
        } else {
            $email = test_input(($_POST['email']));

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["gender"])) {
            $genderErr = "* Gender is required";
        }
        if (empty($_POST["feild"])) {
            $feildErr = "* Agreement is required";
        }
        if (empty($_POST["comment"])) {
            $commentErr = "* Comment is required";
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <?php

    ?>
    <?php
    if (isset($_POST["submit"])) {

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $uploadOk = 1;
        $FileType = pathinfo($target_file, PATHINFO_EXTENSION);


        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        } elseif ($_FILES["file"]["size"] > 1000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        } elseif ($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg" &&  $FileType != "gif" &&  $FileType != "txt" &&  $FileType != "docx" &&  $FileType != "pdf") {
            echo "Sorry, only JPG, JPEG, PNG, GIF, PDF, WORD & TXT files are allowed.";
            $uploadOk = 0;
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    ?>


    <form name="myForm" action="submit.php" method="post" onsubmit="return validateForm()">

        <br>
        <h1 style="text-align: center;">Applicant Information</h1> <br>

        First Name : <input type="text" name="fname" id="fname">
        <span class="error"><?php if (isset($fnameErr)) echo $fnameErr; ?></span><br><br>
        Last Name : <input type="text" name="lname" id="lname">
        <span class="error"><?php if (isset($lnameErr)) echo $lnameErr; ?></span><br><br>
        Company Name : <input type="text" name="company" id="company">
        <span class="error"><?php if (isset($companyErr)) echo $companyErr; ?></span><br><br>
        Email : <input type="text" name="email" id="" max="5">
        <span class="error"><?php if (isset($emailErr)) echo $emailErr; ?></span><br><br>
        Password : <input type="password" name="password" id="password" minlength="5">
        <span class="error"><?php if (isset($passwordErr)) echo $passwordErr; ?></span><br><br>
        Gender:
        <div class="radioBox">
            <input class="check" type="radio" name="gender" value="female">Female &nbsp;
            <input class="check" type="radio" name="gender" value="male">Male &nbsp;
            <input class="check" type="radio" name="gender" value="other">Other
            <span class="error"><?php if (isset($genderErr)) echo $genderErr; ?></span><br><br>

        </div>
        <br>
        <div>
            Upload File : <input class="file" type="file" name="file" id="file">
            <button style="padding: 8px;"> <a href="download.php?file=php">Download File</a> </button>

        </div>
        <br><br>

        <input class="btn" type="submit" value="Upload file" name="submit"></input> <br> <br>

    </form>

    <script>
        function validateForm() {
            let firstname = document.forms["myForm"]["fname"].value;
            if (firstname == "") {
                alert("first name is required")
                return false
            }
            let lirstname = document.forms["myForm"]["lname"].value;
            if (lirstname == "") {
                alert("Last name is required")
                return false
            }
            let company = document.forms["myForm"]["company"].value;
            if (company == "") {
                alert("company is required")
                return false
            }

            let password = document.forms["myForm"]["password"].value;
            if (password == "") {
                alert("password is required")
                return false
            }
            let email = document.forms["myForm"]["email"].value;
            if (email == "") {
                alert("email is required")
                return false
            }
            let gender = document.forms["myForm"]["gender"].value;
            if (gender == "") {
                alert("gender is required")
                return false
            }
            let feild = document.forms["myForm"]["feild"].value;
            if (feild == "") {
                alert("feild is required")
                return false
            }
            let comment = document.forms["myForm"]["comment"].value;
            if (comment == "") {
                alert("comment is required")
                return false
            }
        }
    </script>
</body>

</html>
