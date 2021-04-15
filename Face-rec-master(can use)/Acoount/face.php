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
<html>
<head>
    <title>Face Recognition System</title>
    <link rel="icon" href="../mario.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script src="csjs/camare.js" defer></script>
    <script src="csjs/app.js" defer></script>
    <link href="csjs/app.css" rel="stylesheet">
    <link href="csjs/welcome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        body{ 
            font: 14px sans-serif; 
            text-align: center; 
        }
        #overlay, .overlay {
            position: absolute;
            top: 0px;
            /* left: 443px; */
            left: 500px;
            width: 30%;
        }
        .d1{
            position: absolute;
            top: 23px;
            right: 60px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="page-header1" style="height: 30px">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Make sure your name will appear in the photo.</h1>
    </div>
    <div class="d1"><a href="Home.php">Home</a></div>
    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-md">
            <?php       
                        date_default_timezone_set("Asia/Kuala_Lumpur");
                        $timedate = date('Y-m-d');
                        $username = $_SESSION["username"];
                        $sql = "SELECT username, FaceImg, created_at from face_img Where username = '$username' AND created_at Like '%$timedate%'";
                        $result = $link->query($sql);
                        if($result->num_rows > 0){
                            while ($row = $result->fetch_assoc()) {
                                $image = $row['FaceImg'];
            ?>
                <div><img src="img/<?php echo $image; ?>" style="width:100%" id="refimg"></div>
                            <?php }
                            } ?>
                <div class="overlay"><canvas id="reflay"></canvas></div>
                <script src="js/jquery-2.1.1.min.js"></script>
                <script src="js/face-api.js"></script>
                <script>
                        $(document).ready(function(){
                            
                            async function face(){
                                
                                const MODEL_URL = '../models'

                                await faceapi.loadSsdMobilenetv1Model(MODEL_URL)
                                await faceapi.loadFaceLandmarkModel(MODEL_URL)
                                await faceapi.loadFaceRecognitionModel(MODEL_URL)

                                const img= document.getElementById('refimg')
                                let fullFaceDescriptions = await faceapi.detectAllFaces(img).withFaceLandmarks().withFaceDescriptors()
                                const canvas = $('#reflay').get(0)
                                faceapi.matchDimensions(canvas, img)

                                fullFaceDescriptions = faceapi.resizeResults(fullFaceDescriptions, img)
                                faceapi.draw.drawDetections(canvas, fullFaceDescriptions)
                                // faceapi.draw.drawFaceLandmarks(canvas, fullFaceDescriptions)


                                var con = canvas.getContext("2d");
                                var imgr = new Image()
                                imgr.src = "/img/glass.png";

                                imgr.onload = () => {      con.drawImage(imgr, dx =  471.27335262298584, dy=366.8473286212282 - 4,dw =101.75236415863037,dh =40);  
                                console.log(imgr.width)      };
                                //485.00318117886485,  421.0191735548258
                                console.log(fullFaceDescriptions[0].landmarks)

                                //You want make sure the photo
                                const labels = ['Ahblack', 'rio', 'tokyo', 'berlin', 'nairobi', 'CaptainAmerica' ,'William' ,'JingZhi']

                                const labeledFaceDescriptors = await Promise.all(
                                    labels.map(async label => {
                                        // fetch image data from urls and convert blob to HTMLImage element
                                        const imgUrl = `img/${label}.jpg`
                                        const img = await faceapi.fetchImage(imgUrl)
                                        
                                        // detect the face with the highest score in the image and compute it's landmarks and face descriptor
                                        const fullFaceDescription = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor()
                                        
                                        if (!fullFaceDescription) {
                                        throw new Error(`no faces detected for ${label}`)
                                        }
                                        
                                        const faceDescriptors = [fullFaceDescription.descriptor]
                                        return new faceapi.LabeledFaceDescriptors(label, faceDescriptors)
                                    })
                                );

                                const maxDescriptorDistance = 0.6
                                const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors, maxDescriptorDistance)

                                const results = fullFaceDescriptions.map(fd => faceMatcher.findBestMatch(fd.descriptor))

                                results.forEach((bestMatch, i) => {
                                    const box = fullFaceDescriptions[i].detection.box
                                    const text = bestMatch.toString()
                                    const drawBox = new faceapi.draw.DrawBox(box, { label: text })
                                    drawBox.draw(canvas)
                                })

                                console.log(img);
                            }
                            face()
                        })
                </script>
            </div>
        </div>
    </div>
</body>
</html>