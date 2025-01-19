<?php
$fname="";
$password="";
$err="";
$conn= mysqli_connect("localhost","root","","dbase");
if(isset($_POST['LOGIN'])){
    $fname=mysqli_real_escape_string($conn,$_POST['fname']);// lemkebel ke user 
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    
    $sql="SELECT * FROM users WHERE FIRSTNAME='".$fname."' AND  PASSWORD='".$password."' limit 1";
    $result= mysqli_query($conn,$sql);
    if(empty($fname)){
        $err= "Username is required";
    }else if (empty($password)) {
        $err="Password is required";
    }else if (mysqli_num_rows($result)==1){
        header('location: home.php');
    }else{
        $err="username or password incorrect";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN_SYSTEM</title>
    <link rel="stylesheet" href="CSS/login_style.css">
</head>
<body>
    <div class="box">
        <h1>LOGIN HERE</h1>
    <div class="err">
      <?php 
      echo $err; 
      ?>
    </div>
        <form action="LOGIN.php" method="POST">
            <input type="text" name="fname" id="" placeholder="enter username">
            <input type="password" name="password" id="" placeholder="enter your password">
            <input type="submit" value="LOGIN" name="LOGIN">
            Not yet a member? <a href="signup.php" style="color:#ffc107;">SIGNUP</a>
        </form>
    </div>
</body>
</html>