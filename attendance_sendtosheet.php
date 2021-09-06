<!DOCTYLE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <title>Attendance</title>
        <script src="js/rightclick.js"></script>
        <?php
            if(isset($_POST['field']) && !empty($_POST['field'])) {
                $field = $_POST['field'];
            }
            else {
                header("Location:attendance.php");
            }
        ?>
        
        <link rel='stylesheet' href='css/signin.css' type='text/css' />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script>
            var script_url = "https://script.google.com/macros/s/AKfycbxbnz9to8gQUyXTtmXtw_aOivFC5sCMiynNBoPhtgo/dev";
            $(document).ready(function(){

                var field = $("#field").val();

                var url = script_url+"?callback=ctrlq&field="+field+"&action=checkid";
  
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
                if(msg.toString() == "succeeded") {
                    window.location.href = "attendance.php?validate=succeeded";
                }
                else {
                    window.location.href = "attendance.php";
                }
            }
        </script>
    </head>
    <body id="body">
        <h1 class="title">Mass Attendance System</h1>
        <div class="cont">
            <div class="form">
                <img id="loading" src="image/loading.gif" style="display:block; width:100%;">
                <input type="hidden" name="field" id="field" value="<?php echo $field; ?>">
            </div>
        </div>
        <h2>NanYang Polytechnic</h2>
    </body>
<html>