<!DOCTYLE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <title>Sign In</title>
        <link rel='stylesheet' href='css/signin.css' type='text/css' />
        <script src="js/rightclick.js"></script>
        <?php
            if(isset($_POST['field_insturction1']) && !empty($_POST['field_insturction1'])) {
                $field1 = $_POST['field_insturction1'];
                $field1 = str_replace("<img src=\"image/Field.png\" style=\"height:23px;\">", "Field1", $field1);
                echo "<script>console.log('$field1')</script>";          
            }
            else {
                $field1 = "";
            }
            if(isset($_POST['field_insturction2']) && !empty($_POST['field_insturction2'])) {
                $field2 = $_POST['field_insturction2'];
                $field2 = str_replace("<img src=\"image/Field.png\" style=\"height:23px;\">", "Field2", $field2);
                echo "<script>console.log('$field2')</script>"; 
            }
            else {
                $field2 = "";
            }
            if(isset($_POST['field_insturction3']) && !empty($_POST['field_insturction3'])) {
                $field3 = $_POST['field_insturction3'];
                $field3 = str_replace("<img src=\"image/Field.png\" style=\"height:23px;\">", "Field3", $field3);
                echo "<script>console.log('$field3')</script>";
            }
            else {
                $field3 = "";
            }
            if(isset($_POST['field_insturction4']) && !empty($_POST['field_insturction4'])) {
                $field4 = $_POST['field_insturction4'];
                $field4 = str_replace("<img src=\"image/Field.png\" style=\"height:23px;\">", "Field4", $field4);
                echo "<script>console.log('$field4')</script>"; 
            }
            else {
                $field4 = "";
            }
            if(isset($_POST['field_insturction5']) && !empty($_POST['field_insturction5'])) {
                $field5 = $_POST['field_insturction5'];
                $field5 = str_replace("<img src=\"image/Field.png\" style=\"height:23px;\">", "Field5", $field5);
                echo "<script>console.log('$field5')</script>"; 
            }
            else {
                $field5 = "";
            }
            if(isset($_POST['field_insturction6']) && !empty($_POST['field_insturction6'])) {
                $field6 = $_POST['field_insturction6'];
                $field6 = str_replace("<img src=\"image/Field.png\" style=\"height:23px;\">", "Field6", $field6);
                echo "<script>console.log('$field6')</script>"; 
            }
            else {
                $field6 = "";
            }
            if(isset($_POST['field_insturction7']) && !empty($_POST['field_insturction7'])) {
                $field7 = $_POST['field_insturction7'];
                $field7 = str_replace("<img src=\"image/Field.png\" style=\"height:23px;\">", "Field7", $field7);
                echo "<script>console.log('$field7')</script>"; 
            }
            else {
                $field7 = "";
            }
        ?>
    </head>
    <body id="body">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $.ajax({
                    url:'https://script.google.com/macros/s/AKfycbxbnz9to8gQUyXTtmXtw_aOivFC5sCMiynNBoPhtgo/dev',
                    data:{
                        field1:document.getElementById("field1").value,
                        field2:document.getElementById("field2").value,
                        field3:document.getElementById("field3").value,
                        field4:document.getElementById("field4").value,
                        field5:document.getElementById("field5").value,
                        field6:document.getElementById("field6").value,
                        field7:document.getElementById("field7").value
                    },
                    type:'POST'
                });
                $("#loading").css("display","none");
                $("#field").append("<img id='tick' src='image/tick.png' style='display:block; width:100%;'>");
                $("#field").append("<a href='admin_option.php' class='homelink'>Back to home page</a>");
                
            });
        </script>
        <h1 class="title">Mass Attendance System</h1>
        <div class="cont">
            <div class="form">
                <form id="Final_Form" method="post" action="https://script.google.com/macros/s/AKfycbxbnz9to8gQUyXTtmXtw_aOivFC5sCMiynNBoPhtgo/dev">
                    <?php 
                        if(isset($field1) && $field1 != "") {
                        ?>
                            <input type="hidden" name="field1" id="field1" value="<?php echo $field1; ?>">
                        <?php
                        }
                        else {
                        ?>
                            <input type="hidden" name="field1" id="field1" value="">
                        <?php
                        }
                        if(isset($field2) && $field2 != "") {
                        ?>
                            <input type="hidden" name="field2" id="field2" value="<?php echo $field2; ?>">
                        <?php
                        }
                        else {
                        ?>
                            <input type="hidden" name="field2" id="field2" value="">
                        <?php
                        }
                        if(isset($field3) && $field3 != "") {
                        ?>
                            <input type="hidden" name="field3" id="field3" value="<?php echo $field3; ?>">
                        <?php
                        }
                        else {
                        ?>
                            <input type="hidden" name="field3" id="field3" value="">
                        <?php
                        }
                        if(isset($field4) && $field4 != "") {
                        ?>
                            <input type="hidden" name="field4" id="field4" value="<?php echo $field4; ?>">
                        <?php
                        }
                        else {
                        ?>
                            <input type="hidden" name="field4" id="field4" value="">
                        <?php
                        }
                        if(isset($field5) && $field5 != "") {
                        ?>
                            <input type="hidden" name="field5" id="field5" value="<?php echo $field5; ?>">
                        <?php
                        }
                        else {
                        ?>
                            <input type="hidden" name="field5" id="field5" value="">
                        <?php
                        }
                        if(isset($field6) && $field6 != "") {
                        ?>
                            <input type="hidden" name="field6" id="field6" value="<?php echo $field6; ?>">
                        <?php
                        }
                        else {
                        ?>
                            <input type="hidden" name="field6" id="field6" value="">
                        <?php
                        }
                        if(isset($field7) && $field7 != "") {
                        ?>
                            <input type="hidden" name="field7" id="field7" value="<?php echo $field7; ?>">
                        <?php
                        }
                        else {
                        ?>
                            <input type="hidden" name="field7" id="field7" value="">
                        <?php
                        }
                    ?>
                </form>
                <div id="field">
                    <img id="loading" src="image/loading.gif" style="display:block; width:100%;">
                </div>
            </div>
        </div>
        <h2>NanYang Polytechnic</h2>
    </body>
<html>

