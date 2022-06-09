<?php 

    session_start();
    include_once "database.php";
    if(!isset($_SESSION['email'])){
        header("location:register.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./secondProjectOjt/css folder/primary.css">
    <link rel="stylesheet" href="./secondProjectOjt/css folder/nav.css">
    <link rel="stylesheet" href="./secondProjectOjt/css folder/course.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    

    <!-- navbar section start -->

    <div class="nav_wrapper">`
        <div class="nav_logo">
            <img src="./secondProjectOjt/images/logo.png" alt="">
        </div>
        <div class="nav_menu ">
            <div class="home"><a href="home.php">Home</a></div>
            <div class="about"><a href="about.php">About</a></div>
            <div class="option_select">
            <select  id="">
                <option disabled selected>Choose subject</option>
                <option value="primary.php">Primary</option>
                <option value="secondary.php">Secondary</option>
                <option value="summer.php"> ProgramSummer</option>
            </select></div>
            <div class="activity"><a href="Activity.php">Activity</a></div>
            <div class="contact"><a href="contact.php">contact</a></div>
            <div class="login"><a href="Login.php">Login</a></div>
        </div>
        <div class="humburger_menu_ctn">
            <i class="fa-solid fa-bars toggle"></i>
        </div>
          <div class="x_mark_ctn">
            <i class="fa-solid fa-xmark x_mark"></i>
        </div>
        <div class="user_info">
            <i class="fa-solid fa-user"></i>
        </div>
    </div>

    <!-- navbar section end -->

    <!-- techl and subject info start -->

   <div class="whole_school_ctn">
        <div class="school_ctn">
        <div class="techl_ctn">
            <h1>Mrs.LaSaLa</h1>
            <div class="techl_info"></div>
        </div>
        <div class="subject_ctn">
            <h1>English</h1>
            <div class="subject_info"></div>
        </div>
        
    </div>
   </div>

    <!-- techl and subject info end -->

    <!-- learning system start   -->
            <div class="learn_method">
                <h1 class="intro_ways">We have virtual classroom and online class </h1>
                <div class="whole_ctn">


                    <!-- virtual class start-->
                    <div class="virtual_class">
                        <div class="virtual_image_ctn">
                            <img src="./secondProjectOjt/images/istockphoto-1256442942-1024x1024.jpg" alt="">
                        </div>
                        <h1 class="media_class_one">Virtual Class</h1>
                        <div class="para_ctn">
                            <h1>How we teach in virtual class</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Iusto unde, ducimus eius ullam recusandae rerum.</p>
                        </div>
                        <div class="register_btn">
                            <button>Register</button>
                        </div>
                    </div>
                    <!-- virtual class end  -->

                    <!-- online class start -->
                    <div class="online_class">
                          <div class="online_image_ctn">
                            <img src="./secondProjectOjt/images/istockphoto-1206787367-1024x1024.jpg" alt="">
                        </div>
                        <h1 class="media_class_two">Online Class</h1>
                        <div class="para_ctn_2">
                            <h1>How we teach in online class</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ab vitae! Magni fuga accusantium eum nobis aperiam facere incidunt vitae?</p>
                        </div>
                         <div class="register_btn">
                            <button>Register</button>
                        </div>
                    </div>
                    <!-- online class end -->
                </div>
            </div>
    <!-- learning system end  -->

    <!-- early bird start -->
            <div class="early_bird_ctn">
                <div id="early_bird_heading">There have discount for early bird</div>
                <div class="early_whole_ctn">

                    <div class="early_bird_info"><img src="./secondProjectOjt/images/discount.svg" alt="" id="discount">    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae magni in, minima, rem ratione eum reiciendis nostrum soluta exercitationem provident nulla maxime, minus laboriosam tenetur velit. Cupiditate vitae omnis libero.</div>
                    <div class="early_image_ctn">
                        <img src="./secondProjectOjt/images/istockphoto-487846580-1024x1024.jpg" alt="">
                    </div>
                </div>
                
            </div>

    <!-- early bird end -->

    <?php include_once "footer.php" ?>


    <script src="./secondProjectOjt/javascript/nav.js"></script>
    <script src="./secondProjectOjt/javascript/primary.js"></script>
</body>
</html>