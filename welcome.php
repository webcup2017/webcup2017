<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    <link rel="stylesheet" href="css/welcome.css"> 
    <link rel="icon" href="assets/logo2.png" type="image/gif" sizes="32x32">
</head>
<body>


   <!--  <a href="index.php" class="button button4" >Click Here</a> -->
    <ul class="fly-in-text hidden">
        <li>A</li>
        <li>Q</li>
        <li>U</li>
        <li>A</li>
        <li>M</li>
        <li>A</li>
        <li>G</li>
        <li>I</li>
        <li>C</li>
    </ul>
    <audio autoplay src="assets/wel.mp3"></audio>




    <video autoplay loop id="video-background" muted>
        <source src="assets/backVid.mp4" type="video/mp4">
        </video>

        <!-- <a href="index.php" class="button button4" >Browse For More</a> -->

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
            
            $(function() {
                
                setTimeout(function() {
                    $('.fly-in-text').removeClass('hidden');
                }, 500);
                
            })();
            
        </script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/welcome.js"></script>
        <script type="text/javascript">
            window.setTimeout(function() {
                window.location.href = 'index.php';
            }, 5000);
        </script>
    </body>
    </html>