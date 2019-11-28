<?php
ob_start();
session_start();
$connect = mysqli_connect("localhost","root","","terdata");
if(isset($_POST['login']))
{
    $name = $_POST["name"];
    $nationalid = $_POST["nationalID"];


    $sql = "SELECT * FROM USER WHERE username = '$name'";
    $result = mysqli_query($connect,$sql);

    if($result->num_rows > 0)
    {
        echo "here";

        while($row = $result->fetch_assoc())
        {
            $real_national = $row['national_id'];
            $type = $row['usertype'];
            $exam_id = $row['exam_id'];
            if($real_national == $nationalid){
                echo "USER logged in";
                $_SESSION['national'] = $nationalid;
                if($type == "E"){
                    echo "EXAMINEE";
                    header("Location: examinee_page.php");
                }
                else if ($type == "A"){
                    echo "Admin";
                    header("Location: admin_home.php");

                }


            }
            else{
                echo "Wrong National id";
            }

        }

    }
}
?>