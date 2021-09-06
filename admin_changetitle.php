<!DOCTYLE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <title>Administrator</title>
        <link rel='stylesheet' href='css/signin.css' type='text/css' />
        <script src="js/rightclick.js"></script>
        <?php
            if(isset($_GET['option']) && !empty($_GET['option'])) {
                $title = $_GET['option'];
            }
            else {
                header("Location:admin_option.php");
            }
        ?>
    </head>
    <body id="body">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script>
            var script_url = "https://script.google.com/macros/s/AKfycbxbnz9to8gQUyXTtmXtw_aOivFC5sCMiynNBoPhtgo/dev";
            $(document).ready(function(){
                var title = document.getElementById("option").value;
                var url = script_url+"?callback=ctrlq&title="+title+"&action=changetitle";
  
                var request = jQuery.ajax({
                    crossDomain: true,
                    url: url,
                    method: "GET",
                    dataType: "jsonp"
                });
            });
            
            // print the returned data
            function ctrlq(e) {
                var msg = e.result;
                msg = msg.toString();
                if(msg == "attendance") {
                   window.location.href = "admin_attendance_result.php";
                }
                else if(msg == "pure_instruction") {
                   window.location.href = "admin_pureinstruction.php";
                }
                else if(msg == "qrcode_instruction") {
                   window.location.href = "admin_qrcodeinstruction.php";
                }
                else {
                    window.location.href = "admin_changetitle.php";
                }
            }
        </script>
        <h1 class="title">Mass Attendance System</h1>
        <div class="cont">
            <div class="form">
                <div id="field">
                    <input type="hidden" name="option" id="option" value="<?php echo $title; ?>">
                    <img id="loading" src="image/loading.gif" style="display:block; width:100%;">
                </div>
            </div>
        </div>
        <h2>NanYang Polytechnic</h2>
    </body>
<html>

