<?php
//$connect = mysqli_connect("localhost","root","","terdata");

include '../Views/head.php';
include '../Models/database.php';
include '../Models/ExamModel.php';

$db = new database();
$connect = $db->connects;
$exam = new exam();
if(isset($_POST['addexam']))
{
    $examname = $_POST['examname'];
   $res = $exam->AddExam($connect,$examname);
    if($res)
    {
        echo  "<div class=' alert alert-success'> Data inserted Successfully </div>";
        header( "Refresh:2; url=../Views/add_exam_type.php");
    }
    else{
        echo  "<div class=' alert alert-danger'> Data not inserted </div>";
        header( "Refresh:2; url=../Views/add_exam_type.php");
    }
}
?>