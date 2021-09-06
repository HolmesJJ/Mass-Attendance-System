<!DOCTYLE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <title>Administrator</title>
        <link rel='stylesheet' href='css/signin.css' type='text/css' />
        <link rel='stylesheet' href='css/administrator.css' type='text/css' />
        <script src="js/normal.js"></script>
        <script src="js/rightclick.js"></script>
    </head>
    <body id="body">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script>
            var script_url = "https://script.google.com/macros/s/AKfycbxbnz9to8gQUyXTtmXtw_aOivFC5sCMiynNBoPhtgo/dev";
            $(document).ready(function(){
                var url = script_url+"?callback=ctrlq&action=admingetfield";
  
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
                getfield = getfield.toString().substring(0, getfield.toString().length - 1);
                var splitfield = getfield.split(",");
                $("#loading").css("display","none");
                $("#field").append("<h1 class='subtitle'>Instruction</h1>");
                for(var i=0; i<splitfield.length; i++){
                    $("#field").append("<button class='field_btn' id='field" + (i+1) + "' onclick=\"display_instruction('field" + (i+1) + "')\">" + splitfield[i] + "</button>");
                    $("#field").append("<div class='field_instruction' id='field_instruction" + (i+1) + "'></div>");
                    $("#field").append(" <button class='ins_con_btn' id='insert" + (i+1) + "' onclick=\"Insert_field('insert" + (i+1) + "')\">Insert</button>");
                    $("#field").append("<button class='ins_con_btn' id='partial_confirm" + (i+1) + "' onclick=\"Partial_Submit('partial_confirm" + (i+1) + "')\">Confirm</button>");
                    $("#hidden_field").append("<input name='field_insturction" + (i+1) + "' type='hidden' class='field_instruction_hidden' id='field_instruction_hidden" + (i+1) + "' value=''>");
                   
                    if (i == 0) {
                        $(".cont").css("height","300px");
                        document.getElementById("cont_height").value = 300;
                    }
                    else if (i == 1) {
                        $(".cont").css("height","370px");
                        document.getElementById("cont_height").value = 370;
                    }
                    else if (i == 2) {
                        $(".cont").css("height","440px");
                        document.getElementById("cont_height").value = 440;
                    }
                    else if (i == 3) {
                        $(".cont").css("height","515px");
                        document.getElementById("cont_height").value = 515;
                    }
                    else if (i == 4) {
                        $(".cont").css("height","590px");
                        document.getElementById("cont_height").value = 590;
                    }
                    else if (i == 5) {
                        $(".cont").css("height","660px");
                        document.getElementById("cont_height").value = 660;
                    }
                    else if (i == 6) {
                        $(".cont").css("height","740px");
                        document.getElementById("cont_height").value = 740;
                    }
                }
                $("#field").append("<input type='hidden' name='field_count' value='" + splitfield.length + "'>");
                $("#field").append("<button id='final_confirm' class='signin' onclick=\"Final_Confirm()\">Submit</button>");
            }
        </script>
        <h1 class="title">Mass Attendance System</h1>
        <div class="cont">
            <div class="form">
                <div id="field">
                    <img id="loading" src="image/loading.gif" style="display:block; width:100%;">
                </div>
            </div>
            <form id="hidden_field" method="post" action="admin_pureinstruction_result.php">
                <input name="cont_height" type="hidden" id="cont_height" value="">
            </form>
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

