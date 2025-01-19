<?php
$fname = "";
$lname = "";
$email = "";
$sex = "";
$pass1   = "";
$pass2   = "";
$err= array(); 
$congra="";

$conn= mysqli_connect("localhost","root","","dbase");

if(isset($_POST['SIGNUP'])){
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $sex = mysqli_real_escape_string($conn, $_POST['sex']);
  $pass1= mysqli_real_escape_string($conn, $_POST['pass1']);
  $pass2 = mysqli_real_escape_string($conn, $_POST['pass2']);
  if ($pass1 != $pass2) {
    array_push($err, "The two passwords do not match");
    }
    $user_check_query = "SELECT * FROM users WHERE FIRSTNAME='$fname' OR EMAIL='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { 
      if ($user['FIRSTNAME'] === $fname) {
        array_push($err, "username already exist!");
      }
     else if ($user['EMAIL'] === $email) {
       array_push($err, "Email already exist!");
      
      }}
  if (count($err) == 0) {
      $query = "INSERT INTO users ( FIRSTNAME, LASTNAME, SEX,EMAIL,PASSWORD) 
            VALUES('$fname', '$lname', '$sex','$email',  '$pass1')";
      mysqli_query($conn, $query);
        $congra="You are successfully registerd! login please!";
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-up system</title>
    <link rel="stylesheet" href="CSS/signup_style.css">
</head>
<body>
    <div class="box2">
        <h1>SIGNUP HERE</h1>
    <div class="err">
      <?php 
      include "err.php"; 
      ?>
      <?php 
      echo $congra; 
      ?>
    </div>
    <form action="signup.php" method="POST">
        <input type="text" name="fname" id="" placeholder="Enter First name"required >
        <input type="text" name="lname" id="" placeholder="Enter Last name"required>
        <input type="email" name="email" id="" placeholder="Enter Email"required>
        <label>Sex</label>
        <input type="radio" name="sex" id="" value="Male"required>Male
        <input type="radio" name="sex" id="" value="Female"required>Female
        <input type="password" name="pass1" id="" placeholder="Enter Password"required>
        <input type="password" name="pass2" id="" placeholder="confirm Password"required>
        <input type="submit" name="SIGNUP" value="SIGNUP">
        Already a member?<a href="LOGIN.php" style=" color: #ffc107;">LOGIN</a>
    </form>
    </div>
</body>
</html>