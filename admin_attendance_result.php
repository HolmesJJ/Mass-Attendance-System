<!DOCTYLE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <title>Administrator</title>
        <link rel='stylesheet' href='css/signin.css' type='text/css' />
        <script src="js/rightclick.js"></script>
    </head>
    <body id="body">
        <h1 class="title">Mass Attendance System</h1>
        <div class="cont">
            <div class="form">
                <form action="admin_sendtosheet.php" method="post">
                    <div id="field">
                        <img id="tick" src="image/tick.png" style="display:block; width:100%;">
                    </div>
                    <a href="admin_option.php" class='homelink'>Back to home page</a>
                </form>
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

