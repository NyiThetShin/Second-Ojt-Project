<?php 

session_start();
include_once "database.php";

if(!isset($_SESSION['email'])){
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


   














    <!-- custom css -->
    <link rel="stylesheet" href="./secondProjectOjt/css folder/course.css">
    <link rel="stylesheet" href="./secondProjectOjt/css folder/activity.css">
    <link rel="stylesheet" href="./secondProjectOjt/css folder/nav.css">


    <!--icons links-->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="f.css">






    <!-- fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   
</head>
<body>

    <?php include_once "Nav.php"; ?>

    <!-- course section start -->
    <h1 class="choose_course">CHOOSE YOUR <span>COURSE</span></h1>
        <div class="course_wrapper">
            
            <div class="course_intro_img_ctn">
                <img src="./secondProjectOjt/images/publicdomainq-0007150sdzixo.svg" alt="">
            </div>
            <div class="option_course_ctn">

                <!-- heading need to auto write -->

                <h1 class="course_heading">Course Details</h1>  


                <!-- primary section -->
                <div class="primary_brief ">
                    <div class="heading_ctn">
                        <h1>Primary Subject </h1>
                    </div>
                    <div class="course_detail">
                        <button><a href="primary.php">More details</a></button>
                    </div>
                </div>

                <!-- primary media -->
                <div class="primary_media">
                        <h1>Primary </h1>
                    <div class="course_detail">
                        <button><a href="primary.php">More details</a></button>
                    </div>
                </div>


                <!-- secondary section -->
                <div class="secondary_brief ">
                    <h1>Secondary Subject </h1>
                    <div class="course_detail">
                        <button><a href="secondary.php">More details</a></button>
                    </div>
                </div>

                <!-- secondary media -->
                <div class="secondary_media">
                    <h1>Secondary</h1>
                    <div class="course_detail">
                        <button><a href="secondary.php">More details</a></button>
                    </div>
                </div>


                <!-- summer section -->
                <div class="summer_brief">
                    <h1>Program Summer </h1>
                    <div class="course_detail">
                        <button><a href="summer.php">More details</a></button>
                    </div>
                </div>

                <!-- summer media -->
                <div class="summer_media">
                    <h1>Summer </h1>
                    <div class="course_detail">
                        <button><a href="summer.php">More details</a></button>
                    </div>
                </div>
            </div>
        </div>
    <!-- course section end -->


    <!-- activity section start  -->

    <div class="activity_wrapper">
        <h1 class="intro_acitivty">ACTIVITY TIME</h1>
        <div class="play_img_ctn">
            <h1><span>PlayTime</span> </h1>
            <img src="./secondProjectOjt/images/publicdomainq-game.svg" alt="">
        </div>

        <div class="picnic_img_ctn">
            <h1><span>PICNIC</span> </h1>
            <img src="./secondProjectOjt/images/hanami-gahag.svg" alt="">
        </div>

        <div class="beach_img_ctn">
            <h1><span>BEACH</span> </h1>
            <img src="./secondProjectOjt/images/beachfun2-0041767uuvbwq.svg" alt="">
        </div>
    </div>

    <!-- activity section end  -->

    <?php 
        include_once "footer.php"
    ?>
    
    

<script src="./secondProjectOjt/javascript/nav.js"></script>
<script src="./secondProjectOjt/javascript/home.js"></script>
</body>
</html>