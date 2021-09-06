<!DOCTYLE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <title>Administrator</title>
        <link rel='stylesheet' href='css/signin.css' type='text/css' />
        <link rel='stylesheet' href='css/administrator.css' type='text/css' />
        <script src="js/rightclick.js"></script>
        <style>
            .cont{
                width: 80%;
            }
        </style>
    </head>
    <body id="body">
        <h1 class="title">Mass Attendance System</h1>
        <div class="cont">
            <div class="form">
                <div id="icon_box">
                    <div class="sub_icon_box"><a href="admin_changetitle.php?option=attendance"><br><img id="attendance" class="icon" src="image/attendance1.png"/></a><br><br><span>Attendance Only</span></div>
                    <div class="sub_icon_box"><a href="admin_changetitle.php?option=pure_instruction"><br><img id="pure_instruction" class="icon" src="image/pure_instruction1.png" /></a><br><br><span>Instruction Only</span></div>
                    <div class="sub_icon_box"><a href="admin_changetitle.php?option=qrcode_instruction"><br><img id="qrcode_instruction" class="icon" src="image/qrcode_instruction1.png" /></a><br><br><span>QRcode With Instructions</span></div>
                </div>
            </div>
            <?php
                if(isset($_GET['status']) && !empty($_GET['status'])) {
                    echo "<p class='status'>Insert Failed!</p>";
                }
                if(isset($_POST['status']) && !empty($_POST['status'])) {
                    $status = $_POST['status'];
                    echo "<p class='status'>$status</p>";
                    echo "<p class='status'><a href='https://docs.google.com/spreadsheets/d/1qRdNHdIazX8krgBcMujaaB2mq2UVjlF-BFByN03aEMs/edit#gid=0' target='_blank'>Check the Sheet</a></p>";
                }
            ?>
        </div>
        <h2>NanYang Polytechnic</h2>
    </body>
<html>

