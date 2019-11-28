<?php
class Exam
{
   
     

public function AddExam($connect,$examname 
)
{
   
    $sql = "INSERT INTO exam(exam_type) values('$examname')";
    $result = mysqli_query($connect,$sql);$result = mysqli_query($connect,$sql);
    return $result;
}

}

?>