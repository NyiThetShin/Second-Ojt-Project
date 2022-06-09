  

    <link rel="stylesheet" type="text/css" href="activities.css">
	
	 <!-- custom css -->
    <link rel="stylesheet" href="./secondProjectOjt/css folder/course.css">
    <link rel="stylesheet" href="./secondProjectOjt/css folder/activity.css">
    <link rel="stylesheet" href="./secondProjectOjt/css folder/nav.css">
    <link rel="stylesheet" href="./secondProjectOjt/css folder/summer.css">
    <link rel="stylesheet" href="./secondProjectOjt/css folder/about.css">
   <!-- fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">



  <!-- navbar section start -->

    <div class="nav_wrapper">`
        <div class="nav_logo">
            <img src="./secondProjectOjt/images/logo.png" alt="">
        </div>
        <div class="nav_menu ">
            <div class="home"><a href="home.php">Home</a></div>
            <div class="about"><a href="about.php">About</a></div>
            <div class="option_select">
            <select  id="select_action" onchange="selectFn()">
                <!-- <option disabled selected>Choose subject</option> -->
                <option value="primary.php">Primary</option>
                <option value="secondary.php">Secondary</option>
                <option value="summer.php"> ProgramSummer</option>
            </select></div>
            <div class="activity"><a href="activities.php">Activity</a></div>
            <div class="contact"><a href="contactus.php">contact</a></div>
            <div class="login"><a href="Logout.php" >Logout</a></div>
        </div>
        <div class="humburger_menu_ctn">
            <i class="fa-solid fa-bars toggle"></i>
        </div>
          <div class="x_mark_ctn">
            <i class="fa-solid fa-xmark x_mark"></i>
        </div>
        <div class="user_info">
            <i class="fa-solid fa-user "></i>
        </div>
    </div>

    <!-- navbar section end -->