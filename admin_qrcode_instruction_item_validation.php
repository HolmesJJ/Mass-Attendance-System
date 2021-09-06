<!DOCTYLE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <title>Administrator</title>
        <link rel='stylesheet' href='css/signin.css' type='text/css' />
        <script src="js/rightclick.js"></script>
        <?php
            if(isset($_GET["validation_code"]) && !empty($_GET['validation_code'])){
                $validation_code = $_GET["validation_code"];
            }
        ?>
    </head>
    <body id="body">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script>
            var script_url = "https://script.google.com/macros/s/AKfycbxbnz9to8gQUyXTtmXtw_aOivFC5sCMiynNBoPhtgo/dev";
            $(document).ready(function(){
                var validation_code1 = $("#validation_code_field").val();
                var validation_code_arr = validation_code1.split(",");
                validation_code1 = validation_code_arr[0];
                alert(validation_code1);
                
                var url = script_url+"?callback=ctrlq&validation_code="+validation_code1+"&action=validate";
                
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
                if(msg == "succeed") {
                    document.getElementById("field").innerHTML = "<img id='tick' src='image/tick.png' style='display:block; width:100%;'><h2 class='validation_msg'>Collect Successfully!</h2>";
                    
                }
                else if(msg == "failed"){
                    document.getElementById("field").innerHTML = "<img id='exclamation' src='image/exclamation.png' style='display:block; width:100%;'><h2 class='validation_msg'>Collected already!</h2>";
                }
                else {
                    document.getElementById("field").innerHTML = "<img id='cross' src='image/cross.png' style='display:block; width:100%;'><h2 class='validation_msg'>User not found!</h2>";
                }
                $("#re").html(info);
                $("#re").css("visibility","visible");
            }
        </script>
        <h1 class="title">Mass Attendance System</h1>
        <div class="cont">
            <div class="form">
                <div id="field">
                    <input type="hidden" name="validation_code_field" id="validation_code_field" value="<?php echo $validation_code; ?>"/>
                </div>
                <?php
                    if(isset($_GET["validation_code"]) && !empty($_GET['validation_code'])){
                    }
                    else {
                        echo "<img id='cross' src='image/cross.png' style='display:block; width:100%;'><h2 class='validation_msg'>Error!</h2>";
                    }
                ?>
            </div>
        </div>
        <h2>NanYang Polytechnic</h2>
    </body>
<html>

