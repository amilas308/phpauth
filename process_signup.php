<?php
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$date = $_POST['date'];
$email = $_POST['email'];
$password = $_POST['pswd'];
$cpassword = $_POST['cpswd'];
if(isset($_POST['submit'])){
    // echo 'I have submitted';
    if(empty($fullname)){
        die('Name is required');
    }
    if(empty($username)){
        die('username is required');
    }
    if(empty($date)){
        die('Date is very important');
    }
    if(empty($email)){
        die('Email is key');
    }
    if(empty($password)){
        die('bros put password know');
    }
    if(empty($cpassword)){
        die('Guuuuy confirm the password know!');
    }
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    // echo $hash_password;
    if($password !== $cpassword){
        die('password does not match');
    }
    //  var_dump($_POST);
}
$mysql = require __DIR__ . "/database.php";
$sql = "INSERT INTO `employee`(`Full_name`,`Username`,`Date`,`Email`,`Password`) VALUES ('$fullname','$username','$date','$email','$hash_password')";
// echo'I am not displaying';
if(mysqli_query($conn, $sql)){
    echo '<h1 style=" background-color: grey; color: green; font-size: 90px;">We have acheived a height today</h1>';
    header("Location: login.php");
}

?>