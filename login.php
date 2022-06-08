<?php 


    session_start();
    include_once "database.php";

 if(isset($_REQUEST['login'])){
     $email = $_REQUEST['email'];
     $password = $_REQUEST['password'];
     $select_result = mysqli_query($db,"SELECT * FROM register WHERE  email ='$email' AND password = '$password'");
     if(mysqli_num_rows($select_result) > 0 ) {
         $select_fetch = mysqli_fetch_assoc($select_result);
         $_SESSION['email'] = $select_fetch['email'];
         header("location:home.php");
     }else{
         header("location:register.php");
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
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="wrapper">
        <h1>LOGIN</h1>
        <div class="form_ctn">
            <form action="login.php" method="post">
                <input type="email" placeholder="Email"  id="name" name="email"><br>
                <input type="password" placeholder="Password" id="psw" name="password"><br>
                <button id="sign" name="login">LOGIN </button>
                <p id="none">You don't have registration yet! </p>
                <a href="register.php" id="register">register here!</a>
            </form>
    
        </div>
    </div>
</body>
</html>