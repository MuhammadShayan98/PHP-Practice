<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 70%;
        margin: auto;
        font-family: Arial, Helvetica, sans-serif;
    }

    input {
        padding: 6px;
        border-radius: 4px;
    }

    .btn {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #2f8032;

    }

    .radioBox {
        display: flex;
        align-items: center;
    }

    .error {
        color: red;
    }
</style>

<body>
    <?php
    $fnameErr = "";
    $lnameErr = "";
    $passwordErr = "";
    $emailErr = "";
    $genderErr = "";
    $feildErr = '';
    $commentErr = '';

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
    <form name="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" 
    onsubmit="return validateForm()">

        <br>
        <h1 style="text-align: center;">Applicant Information</h1> <br>

        First Name : <input type="text" name="fname" id="fname">
        <span class="error"><?php if (isset($fnameErr)) echo $fnameErr; ?></span><br><br>
        Last Name : <input type="text" name="lname" id="" lname>
        <span class="error"><?php if (isset($lnameErr)) echo $lnameErr; ?></span><br><br>
        Password : <input type="password" name="password" id="password" minlength="5">
        <span class="error"><?php if (isset($passwordErr)) echo $passwordErr; ?></span><br><br>
        Email : <input type="text" name="email" id="" max="5">
        <span class="error"><?php if (isset($emailErr)) echo $emailErr; ?></span><br><br>
        Gender:
        <div class="radioBox">
            <input class="check" type="radio" name="gender" value="female">Female &nbsp;
            <input class="check" type="radio" name="gender" value="male">Male &nbsp;
            <input class="check" type="radio" name="gender" value="other">Other
            <span class="error"><?php if (isset($genderErr)) echo $genderErr; ?></span><br><br>

        </div>
        <br><br>
        <div style="display: flex;  align-items: center;">
            <input type="checkbox" name="feild" id="">Agree &nbsp;
            <input type="checkbox" name="feild" id=""> not Agree
            <span class="error"><?php if (isset($feildErr)) echo $feildErr; ?></span>

        </div>
        <br><br>

        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <span class="error"><?php if (isset($commentErr)) echo $commentErr; ?></span><br>
        <input name="" class="btn" type="submit" value="Submit"></input>

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
            let gender = document.forms["myForm"]["password"].value;
            if (gender == "") {
                alert("gender is required")
                return false
            }
            let feild = document.forms["feild"]["password"].value;
            if (feild == "") {
                alert("feild is required")
                return false
            }
            let comment = document.forms["feild"]["comment"].value;
            if (comment == "") {
                alert("comment is required")
                return false
            }
        }
    </script>
</body>

</html>