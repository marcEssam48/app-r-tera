<?php
session_start();
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="zxx">


<head>
	<title>Add Examinee</title>
	<meta charset="UTF-8">
	<meta name="description" content="Create Exam">

	 <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="../css/flaticon.css"/>
	<link rel="stylesheet" href="../css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="../css/style2.css"/>
	

	
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

   <!-- Navbar -->
<?php
include 'navbar.php';
?>

<?php
include 'sidebar.php';
?>


<?php
include 'footer1.php';
?>
    <!-- /.navbar -->

<div class="container">	
<!---->
<br>
<br>
<span> <button class="site-btn" id="button" style="float:right"  name="mcq" > Add MCQ</span></button><br><br><br>
<span> <button class="site-btn" id="essayButton" style="float:right"  name="essay" > Add Essay</span></button>	

<!------------------------ MCQ Question ------------------------------->
<div id="myModal" class="modal" >

 
  <div class="modal-content" style="float:right; margin-right:5%;">
    <div class="modal-header">
      <span class="close">&times;</span>
    </div>
    <div class="modal-body">	
		
	<div id="login-form">
	<form method="post">
		<input type="text" placeholder="Enter Question" name="McqQuestion" required>
		<!---------------------------------- Choices ------------------------------>
		<div class="container">
			<div class="form-group">
				<form name="add_name" id="add_name">
					<div class="table-responsive">
						<table class="table" id="dynamic_field">
							
								<td><input type="text" name="name[]" placeholder="Enter correct choice" style= "display:inline-block; margin:5px;" class="form-control name_list" required/></td>
								<td><button name="add" id="add" style="display:inline-block; margin:5px;" class="btn btn-success">+</button></td>
						</table>
						</div>
				</form>
			</div>
		</div>
		  </form>
     <br> <button  class="site-btn" style="float:right; margin:10px;">Add Question</button>
	</div>
 </div>

    </div>
  
  </div>
  
<!------------------------ Essay Question ------------------------------->
<div id="myModalEssay" class="modal">

 
  <div class="modal-content"  style="float:right; margin-right:5%;">
    <div class="modal-header">
      <span class="close">&times;</span>
    </div>
    <div class="modal-body">	
		
	<div id="login-form">
	<form method="post">
		<input type="text" placeholder="Enter Question" name="essayQuestion" required>
		
		  </form>
		  
     <br> <button  class="site-btn" style="float:right; margin:10px;">Add Question</button>
	</div>
 </div>

    </div>
  
  </div>
	
		<?php
#include 'footer1.php';
?>
	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.slicknav.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/jquery-ui.min.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/modal.js"></script>
	<script src="../js/fonts_awesomes.js"></script>
	<script src="../js/add_choice.js"></script>

	</body>

</html>
