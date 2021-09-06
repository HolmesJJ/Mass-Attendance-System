<!DOCTYLE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <title>Administrator</title>
        <script src="js/rightclick.js"></script>
        <?php
            $flag = "";
            $field1 = "";
            $field2 = ""; 
            $field3 = ""; 
            $field4 = ""; 
            $field5 = ""; 
            if(isset($_POST['field1']) && !empty($_POST['field1'])) {
                $field1 = $_POST['field1'];
                $flag = "1";
            }
            if(isset($_POST['field2']) && !empty($_POST['field2'])) {
                $field2 = $_POST['field2'];
                $flag = $flag."2";
            }
            if(isset($_POST['field3']) && !empty($_POST['field3'])) {
                $field3 = $_POST['field3'];
                $flag = $flag."3";
            }
            if(isset($_POST['field4']) && !empty($_POST['field4'])) {
                $field4 = $_POST['field4'];
                $flag = $flag."4";
            }
            if(isset($_POST['field5']) && !empty($_POST['field5'])) {
                $field5 = $_POST['field5'];
                $flag = $flag."5";
            }
            if($flag != "1" && $flag != "12" && $flag != "123" && $flag != "1234" && $flag != "12345") {
                header("Location:administrator.php?status=fail");
            }
            if(empty($_POST['field1']) && empty($_POST['field2']) && empty($_POST['field3']) && empty($_POST['field4']) && empty($_POST['field5'])) {
                header("Location:administrator.php?status=fail");
            }
        ?>
        
        <link rel='stylesheet' href='css/signin.css' type='text/css' />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script>
            var script_url = "https://script.google.com/macros/s/AKfycbxbnz9to8gQUyXTtmXtw_aOivFC5sCMiynNBoPhtgo/dev";
            $(document).ready(function(){

                var field1 = $("#field1").val();
                var field2 = $("#field2").val();
                var field3 = $("#field3").val();
                var field4 = $("#field4").val();
                var field5 = $("#field5").val();
	
                var url = script_url+"?callback=ctrlq&field1="+field1+"&field2="+field2+"&field3="+field3+"&field4="+field4+"&field5="+field5+"&action=setfield";
  
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
                $("#msg").val(msg);
                document.getElementById("status_form").submit();
            }
        </script>
    </head>
    <body id="body">
        <script type="text/javascript">
            window.onload = function(){
                //去掉默认的contextmenu事件，否则会和右键事件同时出现。
                document.oncontextmenu = function(e){
                    e.preventDefault();
                };
                document.getElementById("body").onmousedown = function(e){
                    if(e.button == 2 || e.button == 1){
                        alert("Hjjznb Company");
                    }
                }
            }
        </script>
        <h1 class="title">Mass Attendance System</h1>
        <div class="cont">
            <div class="form">
                <input type="hidden" name="field1" id="field1" value="<?php echo $field1 ?>">
                <input type="hidden" name="field2" id="field2" value="<?php echo $field2 ?>">
                <input type="hidden" name="field3" id="field3" value="<?php echo $field3 ?>">
                <input type="hidden" name="field4" id="field4" value="<?php echo $field4 ?>">
                <input type="hidden" name="field5" id="field5" value="<?php echo $field5 ?>">
                <form id="status_form" method="post" action="administrator.php">
                    <input type="hidden" name="status" id="msg">
                </form>
                <img id="loading" src="image/loading.gif" style="display:block; width:100%;">
            </div>
        </div>
        <h2>NanYang Polytechnic</h2>
    </body>
<html>