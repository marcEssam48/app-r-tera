<!DOCTYPE html>
<html lang="zxx">
<?php
include 'head.php'
?>
<body>
<!-- Header Section -->
<?php
include 'header_page.php';
?>
<!-- Header Section end -->

<!-- Form Section start -->
<section class="hero-section">
    <div class="container" position="center" style="width:500px;">
        <form class="hero-form" action="login_controller.php" method="post">
            <input type="text" placeholder="Name" name="name" required>
            <input type="text" placeholder="National ID" name="nationalID" required>
            <br>
            <div style="width:50%;">
                <input type="submit" name="login" class="site-btn" value="Submit">
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

<?php
include 'footer.php';
?>
</body>

</html>
