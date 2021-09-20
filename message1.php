<!DOCTYPE html>
<html>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    #main {
        border: 2px solid black;
        width: 700px;
        height: 500px;
        margin: 24px auto;
    }

    #message_area {
        width: 98%;
        padding: 1% 1%;
        border: 1px solid black;
        height: 440px;
    }
</style>

<head>
    <title>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
        </script>
        <script>
            function ajax() {
                var req = new XMLHttpRequest();
                req.onreadystatechange = function() {
                    if (req.readyState == 4 && req.status == 200) {
                        document.getElementById('chatt_new').innerHTML = req.responseText;
                    }
                }
                req.open('POST', 'chatt.php', true);
                req.send();
            }
            setInterval(function() {
                ajax()
            }, 1000);
        </script>
    </title>
</head>

<body>


    <div id="main">
        <div id="message_area">

            <?php
            session_start();
            include_once 'db-server.php';

            if (isset($_SESSION['user'])) {
                echo "welcome ", $_SESSION['user_id'];
            }
            $user = $_SESSION['user_id'];
            $receiver = $_SESSION['receiver_id'];
            echo "hlw receive_id $receiver";

            $con = mysqli_connect("localhost", "root", "", "matrimony");

            $sql2 = "SELECT NAME FROM account WHERE ACC_ID='$user';";
            $res2 = mysqli_query($con, $sql2);
            while ($row2 = mysqli_fetch_assoc($res2)) {
                $user_name = $row2['NAME'];
            }
            echo "$user_name<br>";
            $sql3 = "SELECT NAME FROM account WHERE ACC_ID='$receiver';";
            $res3 = mysqli_query($con, $sql3);
            while ($row3 = mysqli_fetch_assoc($res3)) {
                $receiver_name = $row3['NAME'];
            }
            echo "$receiver_name<br>";



            $sql1 = "SELECT * FROM chat WHERE (SENDER_ID='$user' AND RECIEVER_ID='$receiver') OR (SENDER_ID='$receiver' AND RECIEVER_ID='$user');";
            $row1 = mysqli_query($con, $sql1);
            while ($row = mysqli_fetch_assoc($row1)) {
                $msg_sender_id = $row['SENDER_ID'];

                $nsql = "SELECT NAME FROM account WHERE ACC_ID='$msg_sender_id';";
                $nrow1 = mysqli_query($con, $nsql);
                while ($nrow = mysqli_fetch_assoc($nrow1)) {
                    $msg_sender_name = $nrow['NAME'];
                }
                $message = $row['MSG_BODY'];
                /*echo '<h4 style="color:red">' . $msg_sender_name . '</h4>';
				echo '<p>' . $message . '<br></p>';
				echo '<hr>';*/
            }

            if (isset($_POST['message_but'])) {
                $message = $_POST['message'];
                $sql = "INSERT INTO chat (SENDER_ID,MSG_BODY,SENT_TIME,RECIEVER_ID) VALUES('$user','$message','NOW()','$receiver');";
                if (mysqli_query($con, $sql)) {
                    echo " ";
                } else {
                    echo "Something is wrong";
                }
            }
            ?>

        </div>

        <form method="post">
            <input type="text" id="msg_body" name="message" style="width: 350px; height: 50px;" placeholder="type message" />
            <input type="submit" id="msg_butt" name="message_but" style="width: 60px; height: 50px;" value="message" />
        </form>
    </div>

</body>

</html>