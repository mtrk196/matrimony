<?php
session_start();
include_once 'db-server.php';

$con = mysqli_connect("localhost", "root", "", "matrimony");
$id = $_SESSION['user_id'];

$sql = "SELECT * FROM account WHERE ACC_ID='$id';";
$result = mysqli_query($con, $sql);
$resChk = mysqli_num_rows($result);
//$arow = mysqli_fetch_assoc($result);
//$sender_id =$arow['ACC_ID'];

if ($resChk > 0) {
    while ($arow = mysqli_fetch_assoc($result)) {
        $sender_id = $arow['ACC_ID'];
        $sender_name = $arow['NAME'];
        $sender_email = $arow['EMAIL'];
        $sender_pre_add = $arow['PRESENT_ADDRESS'];
        $sender_per_add = $arow['PERMANENT_ADDRESS'];
        $sender_about = $arow['ABOUT'];
        $sender_image = $arow['IMAGE'];
        $sender_religion = $arow['RELIGION'];
        $sender_height = $arow['HEIGHT'];
        $sender_marital_status = $arow['MARITAL_STATUS'];
        $sender_sex = $arow['SEX'];
        $sender_skin_type = $arow['SKIN_TYPE'];
        $sender_dob = $arow['DOB'];
        $sender_blood_grp = $arow['BLOOD_GRP'];
        echo '<nav class="nav-bar">
    <ul style="list-style:none">
        <li value=' . $sender_id . '><a href="new_matches.php">Try For Matches</a></li>
        <li value=' . $sender_id . '><a href="notification.php">Notification</a></li>
        <li value=' . $id . '><a href="friend_list.php">Friends</a></li>
        <li value=' . $id . '><a href="other.php">Add Other Information</a></li>
        <li value=' . $id . '><a href="couples.php">Success Stories</a></li>
        <li value=' . $id . '><a href="logout.php">Logout</a></li>
    </ul>
</nav>';

        echo "<br>";
        echo "<br>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
    <link rel="styleheet" text="text/css" href="profile_m.php">
    <style>
        li {
            display: inline;
            padding-right: 50px;
            font-size: 30px;
        }

        .image_s {
            height: 400px;
            width: 300px;
        }

        #name {}

        .profile_bio {
            font-size: 35px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            line-height: 1.66em;
            display: inline-block;
        }

        body {
            background-color: rgb(181, 189, 154);
        }

        <Script>
            function la(src){
                window.location=src;
            }
        </script>
    </style>
</head>

<body>


    <div id="image_s">
        <img src="images/1.jpg" align="right" id="change" />
    </div><br />
    <div class="profile_bio">
        <div id="name">
            <label>Name:<?php echo $sender_name; ?></label>
        </div>

        <div id="name">
            <label>Email:<?php echo $sender_email; ?></label>
        </div>
        <div id="email">
            <label>Present Address:<?php echo $sender_pre_add; ?></label>
        </div>
        <div id="present_address">
            <label>Permanent Address:<?php echo $sender_per_add; ?></label>
        </div>
        <div id="permanent_address">
            <label>Date of Birth:<?php echo $sender_dob; ?></label>
        </div>
        <div id="About">
            <label>About:<?php echo $sender_about; ?></label>
        </div>
        <div id="about">
            <label>Religion:<?php echo $sender_religion; ?></label>
        </div>
        <div id="permanent_addr">
            <label>Height:<?php echo $sender_height; ?></label>
        </div>
        <div id="permanent_address">
            <label>Blood Group:<?php echo $sender_blood_grp; ?></label>
        </div>
        <div id="permanent_address">
            <label>Marital Status:<?php echo $sender_marital_status; ?></label>
        </div>
        <div id="permanent_address">
            <label>Sex:<?php echo $sender_sex; ?></label>
        </div>
        <div id="permanent_address">
            <label>Skin Type:<?php echo $sender_skin_type; ?></label>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>