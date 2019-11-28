<?php
#$connect = mysqli_connect("localhost","root","","teradata");
session_start();
error_reporting(1);
extract($_POST);
extract($_GET);
extract($_SESSION);
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
	
	<img src="../img/logo.png" alt="" style="max-width:15%;">
</head>

<body>

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
	<h2>This exam consists of:</h2>
	<h3>MCQ Questions:</h3>
	<p>10 questions.</p>
	<h3>Essay Questions:</h3>
	<p>10 questions.</p>
	
	<input class="site-btn" style="font-size: 25px; min-width: 200px; padding: 10px 20px;" onClick="" type="submit" value="Start Exam">

<!-- MCQ Questions Part1 -->
<div class="container" style="width:800px; padding: 100px; margin: 0 auto; text-align:left; font-size:30px;">
<h2 style="color:rgba(58, 72, 81);">MCQ Questions:</h2>

<form method="post" action="mailto:raizen@mail.utexas.edu?subject=Vocabulary Quiz 1" enctype="text/plain">

<h3 style="font-size:25px; color:rgba(58, 72, 81);">Choose the correct answer:</h3>

<!-- MCQ Questions start -->
<P style="font-size:20px;">1. The word which means "house" is:<BR>
<input type="radio" name="1.The word which means house is" value="maison">maison<BR>
<input type="radio" name="1.The word which means house is" value="quatre">quatre<BR>
<input type="radio" name="1.The word which means house is" value="soleil">soleil<BR>
<input type="radio" name="1.The word which means house is" value="poisson">poisson<BR>
</form>
</p>
</div>
<!-- MCQ Questions Section end -->

<!-- Essay Questions Part2 -->

<div class="container" style="width:800px; padding: 100px; margin: 0 auto; text-align:left; font-size:30px;">
<h2 style="color:rgba(58, 72, 81);">Essay Questions:</h2>

<form method="post" action="mailto:raizen@mail.utexas.edu?subject=Vocabulary Quiz 1" enctype="text/plain">

<!-- Essay Questions start -->
<P style="font-size:20px;">1. The word which means "house" is:<BR>
<form class="hero-form" action="login_controller.php" method="post">
     <textarea rows="4" cols="50" placeholder="Write your answer here."></textarea>
</form>
</p>
</div>
<!-- Essay Questions Section end -->

<!-- Buttons -->
<div id="bottom" style="margin: 0 auto; width:600px;">
<input class="site-btn" style="font-size: 25px; min-width: 100px; padding: 10px 20px; display:inline-block; float:left; vertical-align:bottom;" onClick="" type="submit" value="<">
<input class="site-btn" style="font-size: 25px; min-width: 100px; padding: 10px 20px; display:inline-block; float:right; vertical-align:bottom;" type="submit" value=">">
</div>
<br></br>
<br></br>

<!-- Check before submission -->
<h3>Check your answers before submission!</h3>
<input class="site-btn" style="font-size: 25px; min-width: 200px; padding: 10px 20px;" onClick="" type="submit" value="Submit">

<!-- After submission page-->
<h3>Your answers are submitted now!</h3>
<h3>Thank You!</h3>

<!--====== Javascripts & Jquery ======-->
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.slicknav.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/main.js"></script>

</body>
</html>
