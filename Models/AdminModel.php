<?php
class Admin
{
    
     

public function Addadmin($connect,$current_date,
$username ,
$nationalid ,
$usertype )
{
    $sql = "INSERT INTO user(username,national_id,date_insert,usertype) values('$username','$nationalid','$current_date','$usertype')";
    $result = mysqli_query($connect,$sql);
    
    return $result;
}

}

?> 