<?php
Class Calculations
{
    public $totalA = 0;
    public $totalDIS = 0;
    public $total = 0;
    public $totalQ = 0;
    public $totalETLV1 =0;
    public $totalETLV2 =0;
    public $totalETLV3 =0;
    public $totalBI1 =0;
    public $totalBI2 =0;
    public $totalDEV =0;
    public $totalDS =0;
    public $totalIntern =0;
    public $totalModel =0;
    public $totalTest =0;
    

    public function ETLV1COUNT($connect)
    {
    $sql = "select count(exam_type) as totalETLV1
    from exam
    where exam_type = 'ETL' and version = '0'";

    $result = mysqli_query($connect,$sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
           $totalETLV1 = $row['totalETLV1'];

        }

    }
    
    return $totalETLV1;
}

    public function ETLV2COUNT($connect){
        $sql = "select count(exam_type) as totalETLV2
        from exam
        where exam_type = 'ETL' and version =1";
        $result = mysqli_query($connect,$sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
               $totalETLV2 = $row['totalETLV2'];
    
            }
    
        }
        
        return $totalETLV2;
    }
    public function ETLV3COUNT($connect){
        $sql = "select count(exam_type) as totalETLV3
        from exam
        where exam_type = 'ETL' and version =2";
        $result = mysqli_query($connect,$sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
               $totalETLV3 = $row['totalETLV3'];
    
            }
    
        }
        
        return $totalETLV3;
    }

    public function BIV1COUNT($connect){
        $sql = "select count(exam_type) as totalBI1
        from exam
        where exam_type = 'BI' and  version ='0'";
        $result = mysqli_query($connect,$sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
               $totalBI1 = $row['totalBI1'];
    
            }
    
        }
        
        return $totalBI1;
    }
    public function BIV2COUNT($connect){
        $sql = "select count(exam_type) as totalBI2
        from exam
        where exam_type = 'BI' and version ='1'";
        $result = mysqli_query($connect,$sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
               $totalBI2 = $row['totalBI2'];
    
            }
    
        }
        
        return $totalBI2;
    }

    public function DSCOUNT($connect){
        $sql = "select count(exam_type) as totalDS
        from exam
        where exam_type = 'Data Science'";
        $result = mysqli_query($connect,$sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
               $totalDS = $row['totalDS'];
    
            }
    
        }
        
        return $totalDS;
    }

    public function DEVCOUNT($connect){
        $sql = "select count(exam_type) as totalDEV
        from exam
        where exam_type = 'Development'";
        $result = mysqli_query($connect,$sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
               $totalDEV = $row['totalDEV'];
    
            }
    
        }
        
        return $totalDEV;
    }

    public function InternCOUNT($connect){
        $sql = "select count(exam_type) as totalIntern
        from exam
        where exam_type = 'Internship'";
        $result = mysqli_query($connect,$sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
               $totalIntern = $row['totalIntern'];
    
            }
    
        }
        
        return $totalIntern;
    }

    public function TESTCOUNT($connect){
        $sql = "select count(exam_type) as totalTest
        from exam
        where exam_type = 'Testing'";
        $result = mysqli_query($connect,$sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
               $totalTest = $row['totalTest'];
    
            }
    
        }
        
        return $totalTest;
    }

    public function ModelCOUNT($connect){
        $sql = "select count(exam_type) as totalModel
        from exam
        where exam_type = 'Modelling' ";
        $result = mysqli_query($connect,$sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
               $totalModel = $row['totalModel'];
    
            }
    
        }
        
        return $totalModel;
    }




    public function CountA($connect)
    {
        $sql = "select count(username) as totalA
        from user
        where usertype = 'E' and status ='A'";
        $result = mysqli_query($connect,$sql);
    
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
               $totalA = $row['totalA'];
    
            }
    
        }
        
        return $totalA;
    }

 

public function Countdis($connect)
{
    $sql = "select count(username) as totalDIS
    from user
    where usertype = 'E' and status ='D'";
    $result = mysqli_query($connect,$sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
           $totalDIS = $row['totalDIS'];

        }

    }
    
    return $totalDIS;
}

public function CountExaminees($connect)
{
    $sql = "select count(username) as total
    from user
    where usertype = 'E'";
    $result = mysqli_query($connect,$sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
           $total = $row['total'];

        }

    }
    
    return $total;
}


public function Countq($connect)
{
    $sql = "select count(username) as totalQ
    from user
    where usertype = 'E' and status ='Q'";
    $result = mysqli_query($connect,$sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
           $totalQ = $row['totalQ'];

        }

    }
    
    return $totalQ;
}

}
?>