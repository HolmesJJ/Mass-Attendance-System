<!DOCTYLE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <title>QRcode Instruction</title>
        <link rel='stylesheet' href='css/signin.css' type='text/css' />
        <script src="js/rightclick.js"></script>
        <?php
            include "QRcode.php";
            if(isset($_POST['field']) && !empty($_POST['field']) && isset($_POST["validation_code"]) && !empty($_POST['validation_code'])) {
                $field = $_POST['field'];
                $validation_code = $_POST["validation_code"];
            }
            else {
                header("Location:qrcode_instruction.php");
            }
        ?>
    </head>
    <body id="body">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script>
            var script_url = "https://script.google.com/macros/s/AKfycbxbnz9to8gQUyXTtmXtw_aOivFC5sCMiynNBoPhtgo/dev";            
            $(document).ready(function(){
                $(".cont").css("height","850px");
                var field = $("#id_field").val();
                console.log("haha" + field);
                var url = script_url+"?callback=ctrlq&field="+field+"&action=getinstruction";
  
                var request = jQuery.ajax({
                    crossDomain: true,
                    url: url,
                    method: "GET",
                    dataType: "jsonp"
                });
            });
            
            // print the returned data
            function ctrlq(e) {
                var getfield = e.result;
                $("#loading").css("display","none");
                $("#qrcode_instruction_result_subtitle").css("display","block");
                if(getfield.toString() == "") {
                    $(".cont").css("height","550px"); 
                }
                else {
                    getfield = getfield.toString().substring(0, getfield.toString().length - 7);
                    getfield_arr = getfield.split("_spilt_");
                    for (var i=0; i<getfield_arr.length; i++) {
                        $("#subfield").append("<div class='instruction'>" + getfield_arr[i] + "</div>");
                    }
                    $("#subfield").css({
                        "display":"block",
                        "height":"320px",
                        "width":"100%",
                        "margin":"0 auto",
                        "border":"2px solid lightgrey",
                        "text-align": "left"
                    }); 
                    $(".instruction").css ({
                        "font-size": "22px",
                        "margin": "20px",
                        "color": "grey"
                    });
                }
            }
        </script>
        <h1 class="title">Mass Attendance System</h1>
        <div class="cont">
            <div class="form">
                <div id="field">
                    <h1 id="qrcode_instruction_result_subtitle" class='subtitle'>Instruction</h1>
                    <img id="loading" src="image/loading.gif" style="display:block; width:100%;">
                    <input type="hidden" name="id_field" id="id_field" value="<?php echo $field; ?>">
                    <div id="subfield"></div>
                    <?php
                        echo scerweima("http://192.168.1.215/GoogleSheets/admin_qrcode_instruction_item_validation.php?callback=ctrlq&validation_code=$validation_code&action=validate", "$validation_code");
                        if(isset($_POST['validate']) && !empty($_POST['validate'])) {
                            echo "<h2 class='attendance_msg'>Thank you for comming!</h2>"; 
                        }
                    ?>
                </div>
            </div>
            <?php
                if(isset($_GET['status']) && !empty($_GET['status'])) {
                    echo "<p class='status'>Sign in fail! Please sign in again!</p>";
                }
            ?>
        </div>
        <h2>NanYang Polytechnic</h2>
    </body>
<html>

