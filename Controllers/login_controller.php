<?php
ob_start();
session_start();
//$connect = mysqli_connect("localhost","root","root","teradata","3307");

include '../Models/database.php';
include '../Models/UserModel.php';
$db = new database();
$connect = $db->connects;
$user =  new user ();
$_SESSION['login'] = 0;

if(isset($_POST['login']))
{


    $name = $_POST["name"];
    $nationalid = $_POST["nationalID"];

    $res = $user->Login($connect,$name,$nationalid);


    if($res->num_rows > 0)
    {


        while($row = $res->fetch_assoc())
        {
            $real_national = $row['national_id'];
            $type = $row['usertype'];
            $exam_id = $row['exam_id'];
            if($real_national == $nationalid){
                echo "USER logged in";
                $_SESSION['national'] = $nationalid;
                $_SESSION['name'] = $name;
                $_SESSION['login'] = 1;
                if($type == "E"){
                    echo "EXAMINEE";
                    header("Location: ../Views/1.php");
                }
                else if ($type == "A"){
                    echo "Admin";
                    header("Location: ../Views/admin_home.php");

                }


            }
            else{
                echo "Wrong National id";
            }

        }

    }
}
?>