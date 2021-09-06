<!DOCTYLE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
        <title>Company</title>
        <link rel='stylesheet' href='css/signin.css' type='text/css' />
        <script src="js/rightclick.js"></script>
    </head>
    <body id="body">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script>
            var script_url = "https://script.google.com/macros/s/AKfycbxbnz9to8gQUyXTtmXtw_aOivFC5sCMiynNBoPhtgo/dev";
            $(document).ready(function(){
                var url = script_url+"?callback=ctrlq&action=checktitle";
  
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
                document.getElementById("title_field").value = msg.toString();
                document.getElementById("title_form").submit();
            }
        </script>
        <h1 class="title">Mass Attendance System</h1>
        <div class="cont">
            <div class="form">
                <form id="title_form" method="post" action="company_qrcode.php">
                    <input type="hidden" name="title_field" id="title_field" value=""/>
                    <img id='loading' src='image/loading.gif' style='display:block; width:100%;'>
                </form>
            </div>
        </div>
        <h2>NanYang Polytechnic</h2>
    </body>
<html>