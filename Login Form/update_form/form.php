<?php
include "updateform.php";
include "../header/header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <br>
    <div class="container">
        <div class="content">
            <img class="image" src="https://res.cloudinary.com/debbsefe/image/upload/f_auto,c_fill,dpr_auto,e_grayscale/image_fz7n7w.webp" alt="header-image" class="cld-responsive">
            <h1 class="form-title">Update Form</h1>
            <form action="" method="post">
                <!-- <select onchange="toggle_form_element(this)" name='Role_id' id="parts">
                    <option value="-">Please choose</option>
                    <option value="1">Student</option>
                    <option value="2">Teacher</option>
                    <option value="3">HOD</option>
                </select> -->
                <br>
                <input type="text" placeholder="id" name="id" >
                <div id='box1' > <input type="text" placeholder="User Name" name="User_Name"></div>
                <div id='box2' > <input type="text" placeholder="Password" name="User_Password"></div>
                <div id='box3' > <input type="text" placeholder="Full Name" name="Full_Name"></div>
                <div id='box4' > <input type="text" placeholder="Address" name="Address"><br></div>
                <div id='box5' > <input type="text" placeholder="Phone Number" name="Phone_Number"><br></div>
                <div id='box6' > <input type="text" placeholder="Date of Joining" name="Date_of_Joining"> <br> </div>
                <div id='box7' > <input type="text" placeholder="Department" name="Department"><br></div>
                <div id='box8' > <input type="text" placeholder="Courses" name="Courses"><br></div>
                <input class="button" type="submit" name="submit" value="submit"></input>
            </form>
        </div>

    </div>
<!-- 
    <script type="text/javascript">
        function toggle_form_element(select) {
            if (select.value == '1') {
                document.getElementById('box1').style.display = 'block';
                document.getElementById('box2').style.display = 'block';
                document.getElementById('box3').style.display = 'block';
                document.getElementById('box4').style.display = 'block';
                document.getElementById('box5').style.display = 'block';
                document.getElementById('box6').style.display = 'block';
                document.getElementById('box7').style.display = 'block';
                document.getElementById('box8').style.display = 'block';

            } else if (select.value == '2') {
                document.getElementById('box1').style.display = 'block';
                document.getElementById('box2').style.display = 'block';
                document.getElementById('box3').style.display = 'block';
                document.getElementById('box4').style.display = 'block';
                document.getElementById('box5').style.display = 'block';
                document.getElementById('box6').style.display = 'block';
                document.getElementById('box7').style.display = 'block';
                document.getElementById('box8').style.display = 'block';
            } else if (select.value == '3') {
                document.getElementById('box1').style.display = 'block';
                document.getElementById('box2').style.display = 'block';
                document.getElementById('box3').style.display = 'block';
                document.getElementById('box4').style.display = 'block';
                document.getElementById('box5').style.display = 'block';
                document.getElementById('box6').style.display = 'none';
                document.getElementById('box7').style.display = 'block';
                document.getElementById('box8').style.display = 'none';
            } else {
                document.getElementById('box1').style.display = 'none';
                document.getElementById('box2').style.display = 'none';
                document.getElementById('box3').style.display = 'none';
                document.getElementById('box4').style.display = 'none';
                document.getElementById('box5').style.display = 'none';
                document.getElementById('box6').style.display = 'none';
                document.getElementById('box7').style.display = 'none';
                document.getElementById('box8').style.display = 'none';
            }
        }
    </script> -->
</body>

</html>

