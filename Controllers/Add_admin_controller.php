<?php
 
include '../Views/head.php';

include '../Models/database.php';
include '../Models/AdminModel.php';

$db = new database();
$connect = $db->connects;
$Admin = new admin();

if(isset($_POST['Add'])){

    $current_date = date("Y-m-d");
    $username = $_POST['name'];
    $nationalid = $_POST['nationalid'];
    $usertype = "A";

    $res = $Admin->Addadmin($connect,$current_date,
    $username ,
    $nationalid ,
    $usertype );


    if($res){
        echo  "<div class=' alert alert-success'> Data inserted Successfully </div>";
        header( "Refresh:2; url=../Views/add_admin.php");
    }
    else{
        echo  "<div class=' alert alert-danger'> Data not inserted </div>";
        header( "Refresh:2; url=../Views/add_admin.php");
    }
}
?>