<?php
$server="localhost"
$user="root"
$pw=""
$db="farmaid"

$connect = new mysqli($server, $user, $pw, $db);

if($connect->connect_error){
    die("connection failed: " . $connect_error);
}

if(isset($_POST['Username'])){
    $username=$_POST['Username'];
}

if(isset($_POST['Password'])){
    $Password=$_POST['Password'];
}

if(isset($_POST['Confirm_password'])){
    $Confirm_password=$_POST['Confirm_password'];
}

if(isset($_POST['Username'])) && if(isset($_POST['Password'])) && if(isset($_POST['Confirm_password'])){
    $sql="INSERT INTO login(Username, Password, Confirm_password) VALUES('$Username', '$Password', '$Confirm_password')";
    if(connect->query($sql) ===true){
       echo "login successfull"; 
    }
    else{
        "error: " .$sql. "<br>" .$connect->error;
    }
    $connect->close();
}
?> 