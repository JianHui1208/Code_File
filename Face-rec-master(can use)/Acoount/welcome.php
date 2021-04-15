<?php
// Initialize the session
require_once "config.php";
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="icon" href="../mario.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script src="csjs/app.js" defer></script>
    <link href="csjs/app.css" rel="stylesheet">
    <link href="csjs/welcome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header1" style="height: 30px">> -->
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our Face Recognition System.</h1>
    </div>
    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-md">
                <form action="storeImage.php" method="POST">
                    <div id="my_camera"></div>
                    <button onClick="take_snapshot()" style="width: 160px; height: 60px; text-align: center; font-size: 20px;" class="btn btn-success">Take Snapshot</button>
                    <input type="hidden" name="image" class="image-tag">
                    <div class="col-md-6" style="display: none">
                        <div id="results">Your captured image will appear here...</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpg',
        jpg_quality: 300
    });
      
    Webcam.attach( '#my_camera' );

    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
            // window.location.href = 'storeImage.php';
        } );
    }
    </script>
</body>
</html>