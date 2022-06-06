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
        <th>Name</th>
        <th>English</th>
        <th>Urdu</th>
        <th>Maths</th>
        <th>Total</th>

        <tr>
            <td>Shayan</td>
            <?php
            $shayan_Marks = array(55, 75, 88);

            // $sum =  $shayan_Marks[0] + $shayan_Marks[1] + $shayan_Marks[2];
            $sum = array_sum($shayan_Marks);
            if ($shayan_Marks[0] >= 80) { ?>
                <td style='background-color:green;'> <?php echo  $shayan_Marks[0]; ?> </td>
            <?php   } elseif ($shayan_Marks[0] > 60 &&  $shayan_Marks[0] < 80) { ?>
                <td style='background-color:yellow;'> <?php echo  $shayan_Marks[0]; ?> </td>
            <?php } else { ?>
                <td style='background-color:red;'> <?php echo  $shayan_Marks[0]; ?> </td>
            <?php } ?>

            <?php if ($shayan_Marks[1] >= 80) { ?>
                <td style="background-color: green;"><?php echo  $shayan_Marks[1]; ?></td>
            <?php } elseif ($shayan_Marks[1] > 60 &&  $shayan_Marks[1] < 80) { ?>
                <td style='background-color:yellow;'> <?php echo  $shayan_Marks[1]; ?> </td>
            <?php  } else { ?>
                <td style='background-color:red;'> <?php echo  $shayan_Marks[1]; ?> </td>
            <?php } ?>

            <?php if ($shayan_Marks[2] >= 80) { ?>
                <td style="background-color: green;"><?php echo  $shayan_Marks[2]; ?></td>
            <?php } elseif ($shayan_Marks[2] > 60 &&  $shayan_Marks[2] < 80) { ?>
                <td style='background-color:yellow;'> <?php echo  $shayan_Marks[2]; ?> </td>
            <?php  } else { ?>
                <td style='background-color:red;'> <?php echo  $shayan_Marks[2]; ?> </td>
            <?php } ?>
            <td><?php echo $sum;  ?></td>
        </tr>

        <tr>
            <td>Taha</td>
            <?php
            $taha_Marks = array(77, 91, 59);

            // $sum =  $shayan_Marks[0] + $shayan_Marks[1] + $shayan_Marks[2];
            $sum = array_sum($taha_Marks);
            if ($taha_Marks[0] >= 80) { ?>
                <td style='background-color:green;'> <?php echo  $taha_Marks[0]; ?> </td>
            <?php   } elseif ($taha_Marks[0] > 60 &&  $taha_Marks[0] < 80) { ?>
                <td style='background-color:yellow;'> <?php echo  $taha_Marks[0]; ?> </td>
            <?php } else { ?>
                <td style='background-color:red;'> <?php echo  $taha_Marks[0]; ?> </td>
            <?php } ?>

            <?php if ($taha_Marks[1] >= 80) { ?>
                <td style="background-color: green;"><?php echo  $taha_Marks[1]; ?></td>
            <?php } elseif ($taha_Marks[1] > 60 &&  $taha_Marks[1] < 80) { ?>
                <td style='background-color:yellow;'> <?php echo  $taha_Marks[1]; ?> </td>
            <?php  } else { ?>
                <td style='background-color:red;'> <?php echo  $taha_Marks[1]; ?> </td>
            <?php } ?>

            <?php if ($taha_Marks[2] >= 80) { ?>
                <td style="background-color: green;"><?php echo  $taha_Marks[2]; ?></td>
            <?php } elseif ($taha_Marks[2] > 60 &&  $taha_Marks[2] < 80) { ?>
                <td style='background-color:yellow;'> <?php echo  $taha_Marks[2]; ?> </td>
            <?php  } else { ?>
                <td style='background-color:red;'> <?php echo  $taha_Marks[2]; ?> </td>
            <?php } ?>
            <td><?php echo $sum;  ?></td>
        </tr>

        
        <tr>
            <td>Omer</td>
            <?php
            $omer_Marks = array(88, 45, 73);

            // $sum =  $shayan_Marks[0] + $shayan_Marks[1] + $shayan_Marks[2];
            $sum = array_sum($omer_Marks);
            if ($omer_Marks[0] >= 80) { ?>
                <td style='background-color:green;'> <?php echo  $omer_Marks[0]; ?> </td>
            <?php   } elseif ($omer_Marks[0] > 60 &&  $omer_Marks[0] < 80) { ?>
                <td style='background-color:yellow;'> <?php echo  $omer_Marks[0]; ?> </td>
            <?php } else { ?>
                <td style='background-color:red;'> <?php echo  $omer_Marks[0]; ?> </td>
            <?php } ?>

            <?php if ($omer_Marks[1] >= 80) { ?>
                <td style="background-color: green;"><?php echo  $omer_Marks[1]; ?></td>
            <?php } elseif ($omer_Marks[1] > 60 &&  $omer_Marks[1] < 80) { ?>
                <td style='background-color:yellow;'> <?php echo  $omer_Marks[1]; ?> </td>
            <?php  } else { ?>
                <td style='background-color:red;'> <?php echo  $omer_Marks[1]; ?> </td>
            <?php } ?>

            <?php if ($omer_Marks[2] >= 80) { ?>
                <td style="background-color: green;"><?php echo  $omer_Marks[2]; ?></td>
            <?php } elseif ($omer_Marks[2] > 60 &&  $omer_Marks[2] < 80) { ?>
                <td style='background-color:yellow;'> <?php echo  $omer_Marks[2]; ?> </td>
            <?php  } else { ?>
                <td style='background-color:red;'> <?php echo  $omer_Marks[2]; ?> </td>
            <?php } ?>
            <td><?php echo $sum;  ?></td>
        </tr>


    </table>




</body>

</html>