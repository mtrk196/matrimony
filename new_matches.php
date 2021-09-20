<?php
session_start();
include_once 'db-server.php';

$con = mysqli_connect("localhost", "root", "", "matrimony");

//$sender_id=$_POST['submit'];
$sender_id = $_SESSION['user_id'];
//echo "Sender ID is" . $sender_id;
echo '<br>';
echo '<br>';

$gender = "SELECT SEX FROM account WHERE ACC_ID='$sender_id';";
$genres = mysqli_query($con, $gender);
$genreschk = mysqli_num_rows($genres);
while ($grow = mysqli_fetch_assoc($genres)) {
    $gE = $grow['SEX'];
}

$fsql = "SELECT * FROM account WHERE SEX!='$gE';";
$fresult = mysqli_query($con, $fsql);
$fresultCheck = mysqli_num_rows($fresult);
while ($frow = mysqli_fetch_assoc($fresult)) { ?>

    <!DOCTYPE html>

    <head>
        <title></title>
    </head>
    <style type="text/css">
        body {
            background-color: rgb(181, 189, 154);
            align: center;
        }

        .Table_style {
            background-color: white;
            align: center;
            height: 170px;
            width: 1400px;
            border-radius: 15px;
            border-color: brown;
            border: 2px solid grey;
            border-spacing: 15px;
        }

        .Table {
            height: 100px;
            width: 500px;
            margin: 5px;
            padding: 3px;
            padding-bottom: 10px;
            border-color: brown;
            border-width: 2px;
        }

        .image {
            height: 120px;
            width: 120px;
            border-radius: 10%;
            padding-bottom: 30px;
        }

        .Td {
            align: center;
        }
    </style>

    <body>
        <div class="Table_style" align="center">
            <table class="Table" text-align="center bottom">
                <tr>
                    <td><img src="images/1.jpg" class="image" /></td>
                    <td class="Td"><b>Name : <?php echo $frow['NAME']; ?> </br>Date of Birth : <?php echo $frow['DOB']; ?>
                            </br>Religion : <?php echo $frow['RELIGION']; ?></br>Present Address : <?php echo $frow['PRESENT_ADDRESS']; ?>
                            </br>Blood Group : <?php echo $frow['BLOOD_GRP']; ?>
                    </td>
                    <td><b>
                            <?php
                                if (isset($_POST['submit'])) {
                                    $_POST['int_id'] = $frow['ACC_ID'];
                                }
    echo '<td align = "center">' . '<form method = "post" action = "other_info.php"><button name = "match" type = "submit" value = ' . $sender_id, "n", $frow['ACC_ID'] . '>GO</button></form></td>';
    echo '<td align = "center">' . '<form method = "post" action = "req.php"><button name = "match" type = "submit" value = ' . $sender_id, "n", $frow['ACC_ID'] . '>Request</button></form></td>';
                            ?>
                    </td>' </td>
                </tr>
            </table>

        </div>
    </body>

    </html>



<?php
}
?>