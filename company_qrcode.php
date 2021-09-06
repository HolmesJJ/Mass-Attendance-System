<!DOCTYLE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <title>Company</title>
        <link rel='stylesheet' href='css/signin.css' type='text/css' />
        <script src="js/rightclick.js"></script>
        <?php
            include "QRcode.php";
        ?>
    </head>
    <body id="body">
        <h1 class="title">Mass Attendance System</h1>
        <div class="cont">
            <div class="form">
                <form id="title_form" method="post" action="home.php">
                    <?php
                        if(isset($_POST['title_field']) && !empty($_POST['title_field'])) {
                            $title_field = $_POST['title_field'];
                            if($title_field == "Attendance"){
                                $title_field = "attendance";
                            }
                            else if($title_field == "Pure Instruction"){
                                $title_field = "pure_instruction";
                            }
                            else {
                                $title_field = "qrcode_instruction";
                            }
                            $url = "http://192.168.1.215/GoogleSheets/$title_field.php";
                            echo scerweima_company($url, "hjjznb");
                        }
                        else {
                            header("Location:company_generateqrcode.php");
                        }
                    ?>
                </form>
            <?php
                
            ?>
            </div>
        </div>
        <h2>NanYang Polytechnic</h2>
    </body>
<html>