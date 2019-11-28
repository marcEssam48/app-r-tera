<?php
class User
{
   
     

public function AddNormalUser($connect,$current_date ,
$username ,
$nationalid, 
$phonenumber, 
$email,
$examtype, 
$birthdate)
{
    $sql = "INSERT INTO user(username,national_id,birthdate,email,phonenumber,exam_id,date_insert) 
    values('$username','$nationalid','$birthdate','$email','$phonenumber','$examtype','$current_date')";
    $result = mysqli_query($connect,$sql);
    return $result;
}
Public function Login ($connect,$name ,$nationalid)
{
    
    $sql = "SELECT * FROM USER WHERE username = '$name'";
    $result = mysqli_query($connect,$sql);
    return $result;
}
}

?>