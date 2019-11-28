<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Exam</title>
    <meta charset="UTF-8">
    <meta name="description" content="Exam">

  
    <!-- Google font -->
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
    <link rel="stylesheet" href="../css/style.css"/>
	
	  <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<?php
include 'navbar.php';
?>

<?php
include 'sidebar.php';
?>


<?php
include 'footer1.php';
?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Admin</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">     
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
<!-- Form Section start -->
<div class="container">

  	<hr>
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <!-- <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>alert</strong>. Use this to show important messages to the user.
        </div> -->      
        
        
        <form class="form-horizontal" action="../Controllers/Add_admin_controller.php"  method="post" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" placeholder="Name" name="name" type="text" required>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">National ID:</label>
            <div class="col-lg-8">
              <input class="form-control" placeholder="National ID" name="nationalid" type="text" required>
            </div>
          </div>
          
          </div>
		  <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes" name="Add">
              
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
			<br>
          </div>
        </form>  
<!--====== Javascripts & Jquery ======-->
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.slicknav.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/fonts_awesomes.js"></script>

</body>
</html>
