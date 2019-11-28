<?php
$connect = mysqli_connect("localhost","root","root","teradata","3307");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Add Examinee</title>
	<meta charset="UTF-8">
	<meta name="description" content="Examinee">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="../css/flaticon.css"/>
	<link rel="stylesheet" href="../css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="../css/style.css"/>

</head>
<body>
	<?php include'header_page.php'; ?>
	
	<!-- Form Section start -->
	<section class="hero-section" >
	    <div class="container" style="width:500px;">
	        <form class="hero-form" action="../Controllers/Add_user_controller.php" method="post">
				<h5 style="color:white">Add Examinee</h5> <br>
	            <input type="text" placeholder="Name"           name="name" required>
	            <input type="text" placeholder="National ID"    name="nationalid" required>
				<input type="date" placeholder="Birth Date"     name="birthdate" required>
				<input type="email" placeholder="Email Address" name="email" required>
				<input type="text" placeholder="Phone Number"   name="phonenumber" required>
                <div class="form-control">
                <select name="examtype" style="width: 100%">
                    <?php
                    $sql = "select * from exam";
                    $result = mysqli_query($connect,$sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            ?>
                            <option value="<?php echo $row['exam_id']?>"><?php echo $row['exam_type']?></option>
                            <?php
                        }

                    }
                    ?>
                    <!--  loop to get examtypes from db -->


                </select>
                </div>
	            <br>
	            <div style="width:50%;">
	                <input type="submit" name="Add" class="site-btn" value="Add" >
	            </div>
	        </form>
	    </div>
	</section>
	<!-- Form Section end -->

	
	
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
