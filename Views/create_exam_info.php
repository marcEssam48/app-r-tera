<?php
session_start();
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	
	<!-- Main Stylesheets -->
    <link rel="stylesheet" href="../css/style2.css"/>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
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
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Exam Information</h1>
                    </div>
                    
                </div>
            </div><!-- /.container-fluid -->
        </section>
    <div class="container">

  	<hr>
      <!-- edit form column -->         
        <form class="form-group" action="create_exam.php" method="post">
            <div class="col-lg-6">
                <select name="examType" class="form-control">
                  
				  
                </select>
				
				<br><input type="number" placeholder="Exam version" name="examVersion" class="form-control">
				<br><input type="number" placeholder="Exam duration in hours" name="examDuration" class="form-control">
				<br><input type="number" placeholder="Passing grade" name="passingGrade" class="form-control">

            </div>
			
			<br><br><br><button class="site-btn" type="submit" id="button" style=" min-width: 128px ;float:right"  name="next" >Next</button>
             
			 </form>
		
  </div>
</div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.2-pre
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script src="../js/fonts_awesomes.js"></script>
</body>
</html>
