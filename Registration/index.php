<?php
include 'registrationctrl.php';
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
    <select onchange="toggle_form_element(this)" id="parts">
        <option value="-">Please choose</option>
        <option value="0">Student</option>
        <option value="1">Teacher</option>
        <option value="2">HOD</option>
    </select>
    <br><br>


    <div class='form_style' id="Form1" style="display: none;">

        <form action="" method="post">
            <h1>Registration Form</h1>
            <br>
            <table>
                <tr>
                    <td>
                        <label for="">Student_Name</label> &nbsp;
                    </td>

                    <td>
                        <input type="text" name="Student_Name" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Address</label> &nbsp;
                    </td>
                    <td>
                        <input type="text" name="Address" id="">

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Date_of_Birth</label> &nbsp;

                    </td>
                    <td>
                        <input type="text" name="Date_of_Birth" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Phone Number</label> &nbsp;
                    </td>
                    <td>
                        <input type="text" name="Phone_Number" id="">

                    </td>
                </tr>
               
                <tr>
                <tr>
                    <td>
                        <label for="">Date_of_Joining</label> &nbsp;
                    </td>
                    <td>
                        <input type="text" name="Date_of_Joining" id="">

                    </td>
                </tr>
                
                    <td>
                        <label for="">Depart_Name</label> &nbsp;
                    </td>
                    <td>
                        <input type="text" name="Depart_Name" id="">

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Passwords</label> &nbsp;
                    </td>
                    <td>
                        <input type="Passwords" name="Passwords" id="">

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button class='btn' type="submit" name="submit" value="submit">Submit</button>
                    </td>
                </tr>
            </table>

        </form>



    </div>
    <div class='form_style' id="Form2" style="display: none;">

        <form action="" method="post">
            <h1>Registration Form</h1>
            <br>
            <table>
                <tr>
                    <td>
                        <label for="">Teacher_Name</label> &nbsp;
                    </td>

                    <td>
                        <input type="text" name="" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Address</label> &nbsp;
                    </td>
                    <td>
                        <input type="text" name="" id="">

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Date_of_Birth</label> &nbsp;

                    </td>
                    <td>
                        <input type="text" name="" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Phone Number</label> &nbsp;
                    </td>
                    <td>
                        <input type="text" name="" id="">

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Depart_Name</label> &nbsp;
                    </td>
                    <td>
                        <input type="text" name="" id="">

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Password</label> &nbsp;
                    </td>
                    <td>
                        <input type="Password" name="" id="">

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button class='btn' type="submit">Submit</button>
                    </td>
                </tr>
            </table>

        </form>


    </div>
    <div class='form_style' id="Form3" style="display: none;">

        <form action="" method="post">
            <h1>Registration Form</h1>
            <br>
            <table>
                <tr>
                    <td>
                        <label for="">HOD_Name</label> &nbsp;
                    </td>

                    <td>
                        <input type="text" name="HOD_Name" id="">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="">Depart_Name</label> &nbsp;
                    </td>
                    <td>
                        <input type="text" name="Depart_Name" id="">

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Password</label> &nbsp;
                    </td>
                    <td>
                        <input type="Password" name="HOD_Password" id="">

                    </td>
                </tr>

                <tr>
                    <td>
                    </td>
                    <td>
                        <button class='btn' type="submit" name="submit" value="Submit">Submit</button>

                    </td>
                </tr>
            </table>

        </form>

    </div>

    <script type="text/javascript">
        function toggle_form_element(select) {
            if (select.value == '0') {
                document.getElementById('Form1').style.display = 'block';
                document.getElementById('Form2').style.display = 'none';
                document.getElementById('Form3').style.display = 'none';
            } else if (select.value == '1') {
                document.getElementById('Form1').style.display = 'none';
                document.getElementById('Form2').style.display = 'block';
                document.getElementById('Form3').style.display = 'none';
            } else if (select.value == '2') {
                document.getElementById('Form1').style.display = 'none';
                document.getElementById('Form2').style.display = 'none';
                document.getElementById('Form3').style.display = 'block';
            } else {
                document.getElementById('Form1').style.display = 'none';
                document.getElementById('Form2').style.display = 'none';
                document.getElementById('Form3').style.display = 'none';
            }
        }
    </script>
</body>

</html>