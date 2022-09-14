<?php

$server="localhost";
$username="root";
$password="";
$database="shop";

$conn= mysqli_connect($server, $username, $password, $database);

// if(!$conn){
//     die("<script>alert('Connection failed')</script>");
// }

session_start();

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $sql="SELECT * FROM users WHERE email='$email' AND password='$password' ";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows > 0){
        $row=mysqli_fetch_assoc($result);
        $_SESSION['name']=$row['name'];
        header('Location:./profile.php');
    } else {
        echo "<script>alert('Email or Password are incorrect')</script>";
    }

}

