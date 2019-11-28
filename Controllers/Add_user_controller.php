<?php

include '../Views/head.php';
include '../Models/UserModel.php';
include '../Models/database.php';
$db = new database();
$connect = $db->connects;
 $user = new User();

 if(isset($_POST['Add']))
 {
    $current_date = date("Y-m-d");
    $username = $_POST['name'];
    $nationalid = $_POST['nationalid'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $examtype = $_POST['examtype'];
    $birthdate = $_POST['birthdate'];

  $res =  $user->AddNormalUser($connect,$current_date ,
 $username ,
 $nationalid, 
 $phonenumber, 
 $email ,
 $examtype, 
 $birthdate);

    if($res){
        echo  "<div class=' alert alert-success'> Data inserted Successfully </div>";
        header( "Refresh:2; url=../Views/add_examinee.php");
    }
    else{
        echo  "<div class=' alert alert-danger'> Data not inserted </div>";
        // header( "Refresh:2; url=../Views/add_examinee.php");
    }
}
?>