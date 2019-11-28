<?php

include '../Views/head.php';
include '../Models/database.php';
include '../Models/CalculationsModel.php';

$db = new database();
$connect = $db->connects;
$Calculations = new Calculations();




$totalETLV1 = $Calculations->ETLV1COUNT($connect);
$totalETLV2 = $Calculations->ETLV2COUNT($connect);
$totalETLV3 = $Calculations->ETLV3COUNT($connect);
$totalBI1 = $Calculations->BIV1COUNT($connect);
$totalBI2 = $Calculations->BIV2COUNT($connect);
$totalDS = $Calculations->DSCOUNT($connect);
$totalDEV = $Calculations->DEVCOUNT($connect);
$totalIntern = $Calculations->InternCOUNT($connect);
$totalTest = $Calculations->TESTCOUNT($connect);
$totalModel = $Calculations->ModelCOUNT($connect);


$res = $Calculations->CountExaminees($connect);
$disres = $Calculations->Countdis($connect);
$qualifiedres = $Calculations->countQ($connect);
$Avgres = $Calculations->CountA($connect);


 $_SESSION['res'] = $res;
 $_SESSION['disres'] = $disres;
 $_SESSION['qualifiedres'] = $qualifiedres;
 $_SESSION['Avgres'] = $Avgres;
 $_SESSION['totalETLV1'] = $totalETLV1;
 $_SESSION['totalETLV2'] = $totalETLV2;
 $_SESSION['totalETLV3'] = $totalETLV3;
 $_SESSION['totalBI1'] = $totalBI1;
 $_SESSION['totalBI2'] = $totalBI2;
 $_SESSION['totalDS'] = $totalDS;
 $_SESSION['totalDEV'] = $totalDEV;
 $_SESSION['totalIntern'] = $totalIntern;
 $_SESSION['totalTest'] = $totalTest;
 $_SESSION['totalModel'] = $totalModel;



?>