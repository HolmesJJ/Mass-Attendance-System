<!DOCTYLE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <title>QRcode Instruction</title>
        <script src="js/rightclick.js"></script>
        <?php
            if(isset($_POST['field']) && !empty($_POST['field'])) {
                $field = $_POST['field'];
            }
            else {
                header("Location:pure_instruction.php");
            }
        ?>
        
        <link rel='stylesheet' href='css/signin.css' type='text/css' />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script>
            var script_url = "https://script.google.com/macros/s/AKfycbxbnz9to8gQUyXTtmXtw_aOivFC5sCMiynNBoPhtgo/dev";
            $(document).ready(function(){

                var field = $("#id_field").val();

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
                $("#validation_code").val(msg);
                document.getElementById("vc_form").submit();
            }
        </script>
    </head>
    <body id="body">
        <h1 class="title">Mass Attendance System</h1>
        <div class="cont">
            <div class="form">
                <div id="field">
                    <form id="vc_form" method="post" action="qrcode_instruction_result.php">
                        <img id="loading" src="image/loading.gif" style="display:block; width:100%;">
                        <input type="hidden" name="validation_code" id="validation_code" >
                        <input type="hidden" name="validate" value="succeeded" >
                        <input type="hidden" name="field" id="id_field" value="<?php echo $field; ?>">
                    </form>
                </div>
            </div>
        </div>
        <h2>NanYang Polytechnic</h2>
    </body>
<html>