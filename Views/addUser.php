<?php
$connect = mysqli_connect("localhost","root","","terdata");
?>
<!DOCTYPE html>
<html>
<body>



<form action="../Controllers/Add_user_controller.php" method="post">

    <input type="text" name="name" >
    <br>
    <input type="number" name="nationalid" >
    <br>
    <input type="number" name="phonenumber" >
    <br>
    <input type="email" name="email" >
    <br>
    <select name="examtype">
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

    <br>

    <input type="date" name="birthdate" >
    <br><br>
    <input type="submit" value="Submit" name="Add">
</form>



</body>
</html>
