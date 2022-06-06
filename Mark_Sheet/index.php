<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<style>
    table {
        margin: auto;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;

    }

    th,
    td {
        padding-top: 10px;
        padding-bottom: 20px;
        padding-left: 30px;
        padding-right: 40px;
    }
</style>

<body>

    <table>
        <?php
        $rows = 1;
        $cols = 1;

        echo "<table border='1'>";

        echo "<th>Name</th>
        <th>Maths</th>
        <th>English</th>
        <th>Urdu</th>
        <th>Total</th>";

        for ($tr = 1; $tr <= $rows; $tr++) {
            echo "<tr>";
            echo "<td> Shayan </td>";
            for ($td = 1; $td <= $cols; $td++) {
                $shayan_Marks = array(55, 88, 70);
                $sum = array_sum($shayan_Marks);
                foreach ($shayan_Marks as $value) {
                    echo "<td> $value </td>";
                }
            }
            echo "<td> $sum </td>";
            echo "</tr>";
        }
        for ($tr = 1; $tr <= $rows; $tr++) {
            echo "<tr>";
            echo "<td> Taha </td>";
            for ($td = 1; $td <= $cols; $td++) {
                $taha_Marks = array(44, 77, 85);
                $sum = array_sum($taha_Marks);
                foreach ($taha_Marks as $value) {
                    echo "<td> $value </td>";
                }
            }
            echo "<td> $sum </td>";
            echo "</tr>";
        }
        for ($tr = 1; $tr <= $rows; $tr++) {
            echo "<tr>";
            echo "<td> Ali </td>";
            for ($td = 1; $td <= $cols; $td++) {
                $ali_Marks = array(50, 72, 95);
                $sum = array_sum($ali_Marks);
                foreach ($ali_Marks as $value) {
                    echo "<td> $value </td>";
                }
            }
            echo "<td> $sum </td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>
    </table>
</body>

</html>