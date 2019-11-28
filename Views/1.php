<?php
// $connect = mysqli_connect("localhost","root","","teradata");
session_start();
$name = $_SESSION['name'];
error_reporting(1);
extract($_POST);
extract($_GET);
extract($_SESSION);

include '../Models/database.php';
$db = new database();
$connect = $db->connects;
$sql = "Select user.exam_id , exam.exam_type from user inner join exam on user.exam_id = exam.exam_id where user.username = '$name'";
$result = mysqli_query($connect,$sql);
$exam_type = "";

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        
        $exam_type=  $row['exam_type'];

    }

}
/*$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs))
{
unset($_SESSION[qn]);
exit;
}*/
/*if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:/exam/examPage.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location:/exam/index.php");
}*/
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Exam Page</title>
    <meta charset="UTF-8">
    <meta name="description" content="ExamPage">
    <meta name="keywords" content="loans, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="../css/flaticon.css"/>
    <link rel="stylesheet" href="../css/slicknav.min.css"/>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="../css/style3.css"/>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<img src="../img/Teradata_logo_2018.png" alt="" style="max-width:20%; margin-top:20px; margin-left:20px;">
</head>

<body>
<div class="container" style="width:800px; padding: 80px; margin-top: -35px; margin-left: 25%; text-align:left; font-size:30px;">
<!-- Retrieve Exam Name & Structure -->
<?php
   
   if(isset($_SESSION["success"]))
   {
   $exam_id = $_GET['exam_id'];
   $query = "SELECT exam_type FROM exam WHERE exam_id =$exam_id";
   $result = mysqli_query($connect, $query);
	   while($row = mysqli_fetch_array($result))
	   {
	   ?>
        <?php echo $row['exam_type']; ?> <h1 style = "padding: 50px; text-align: center;">Exam</h1>
	   <?php
	   }
	}?>
	<h2><?php echo $exam_type;?> exam  consists of:</h2>
	<h3>MCQ Questions:</h3>
	<p style="font-size:25px;">10 questions.</p>
	<h3>Essay Questions:</h3>
	<p style="font-size:25px;">10 questions.</p>
	<h3>Exam Duration:</h3>
	<p style="font-size:25px;">1 Hour.</p>
	
	<input class="site-btn" style="font-size: 25px; border-radius: 100px; min-width: 200px; margin-top: 50px; padding: 10px 20px;" onClick="window.location.href='2.php'" type="submit" value="Start Exam">
</div>
<!--====== Javascripts & Jquery ======-->
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.slicknav.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/main.js"></script>

</body>
</html>
