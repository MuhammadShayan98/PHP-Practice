<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>

<body>

    <select id="mySelect" onclick="myFunction(this, event)">
        <option value="-">Please choose</option>
        <option value="Student">Student</option>
        <option value="Teacher">Teacher</option>
        <option value="HOD">HOD</option>

    </select>

<br>

    <h1>Registration Form</h1> <br>

    <div id="form1" style="display: none;">

        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <label for="">Student_Name</label> &nbsp;
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
            </table>

        </form>
    </div>

    <div id="form2" style="display: none;">
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
        </table>

    </div>

    <div id="form2" style="display: none;">
        <h1>Teacher</h1>
    </div>
    <div id="form3" style="display: none;">
        <h1>HOD</h1>
    </div>
    <script>
        function myFunction(event) {



            var selection = document.getElementById("mySelect").value;
            if (selection === "Student") {
                event.currentTarget = document.getElementById("form1").style.display = "block";
                return false;

            } else if (selection === "Teacher") {
                event.currentTarget = document.getElementById("form2").style.display = "block";
                return false;

            } else if (selection === "HOD") {
                event.currentTarget = document.getElementById("form3").style.display = "block";
                return false;
            } else {
                document.getElementById("form1").style.display = "none";
                document.getElementById("form2").style.display = "none";
                document.getElementById("form3").style.display = "none";

            }
        }
    </script>
</body>

</html>