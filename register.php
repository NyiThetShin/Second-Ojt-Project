<?php 
session_start();
include_once "database.php";


if(isset($_REQUEST['register'])){
    $name = $_POST['f_name'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $confirmPassword = $_POST['cpsw'];

    if($password === $confirmPassword) {

        $select_info = "SELECT * FROM `register` WHERE email = '$email' && password = '$password' ";
        $select_result = mysqli_query($db,$select_info);
        if(mysqli_num_rows($select_result) > 0) {
            echo "Sorry this account is already registered!";
        }else{
            mysqli_query ($db,"INSERT INTO register (name,password,email) VALUES ('$name','$password','$email')");
            $_SESSION['email'] = $email;
            header("location:home.php");

    }
    }else{
        echo "please fill correct your confirm password!";
    }

  


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
   <div class="wrapper">
        <h1>Create New Account</h1>
        <div class="form_ctn">

            <form action="register.php" method= "post">
                <label for="first" id="first_name">Name</label><br>
                <input type="text" placeholder="First Name" id="first" name="f_name"><br>


                 <label for="email" id="email">Email</label><br>
                <input type="email" placeholder="Email" id="Email" name="email"><br>

                <label for="Password" id="password">Password</label><br>
                <input type="password" placeholder="Password" id="Password" name="psw"><br>

                 <label for="C_Password" id="password">Confirm Password</label><br>
                <input type="password" placeholder="Confirm password" id="C_Password" name="cpsw"><br>

                <button id="register" name="register">Register</button>
            </form>

        </div>
   </div>
</body>
</html>