<!DOCTYLE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <title>QRcode Instruction</title>
        <link rel='stylesheet' href='css/signin.css' type='text/css' />
        <script src="js/rightclick.js"></script>
    </head>
    <body id="body">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script>
            var script_url = "https://script.google.com/macros/s/AKfycbxbnz9to8gQUyXTtmXtw_aOivFC5sCMiynNBoPhtgo/dev";
            $(document).ready(function(){
                var url = script_url+"?callback=ctrlq&action=getfield";
  
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
                getfield = getfield.toString();
                $("img").css("display","none");
                $("#field").append("<h1 class='subtitle'>Sign In</h1>");
                $("#field").append("<input type='text' name='field' class='field' placeholder='" + getfield + "' required='required' maxlength='30'>");
                $("#field").append("<input type='submit' class='signin' value='Sign In'>");
                $(".cont").css("height","320px"); 
            }
        </script>
        <h1 class="title">Mass Attendance System</h1>
        <div class="cont">
            <div class="form">
                <form action="qrcode_instruction_sendtosheet.php" method="post">
                    <div id="field">
                        <img id="loading" src="image/loading.gif" style="display:block; width:100%;">
                    </div>
                    <?php
                        if(isset($_GET['validate']) && !empty($_GET['validate'])) {
                            echo "<h2 class='attendance_msg'>Thank you for comming!</h2>"; 
                        }
                    ?>
                </form>
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

