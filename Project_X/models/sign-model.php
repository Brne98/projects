<?php

$server="localhost";
$username="root";
$password="";
$database="shop";

$conn= mysqli_connect($server, $username, $password, $database);

if(!$conn){
    die("<script>die('Connection field')</script>");
}



if(empty($_POST['username']) || $_POST['username']===""){
    echo "<script>alert('Name not valid!')</script>";
} elseif(empty($_POST['email']) || $_POST['email']===""){
    echo "<script>alert('Email not valid!')</script>";
} elseif(empty($_POST['password']) || $_POST['password']===""){
    echo "<script>alert('Name not valid!')</script>";
} else {
    if(isset($_POST['register'])){
        $name=$_POST['username'];
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $re_password=md5($_POST['re_password']);
    
        if($password==$re_password){
            $sql="SELECT * FROM users WHERE email='$email'";
            $result=mysqli_query($conn,$sql);
            if(!$result->num_rows>0){
            $sql="INSERT INTO users (name, email, password)
            VALUES ('$name','$email','$password')";
            $result=mysqli_query($conn,$sql);
            if($result){
            echo "<script>alert('User registration completed!')</script>";
            $name="";
            $email="";
            $_POST['password']="";
            $_POST['re_password']="";
            } else {
            echo "<script>alert('Something went wrong')</script>";
            }
        } else {
            echo "<script>alert('Email already exists')</script>";
        } 
        } else{
            echo "<script>alert('Password not mached')</script>";
        }
    } 
}

