<?php 
    $rent_id = $_GET['rent_id'];   
    include("dblink.php");
    $sql = "DELETE FROM `semesterrecord` WHERE `semesterrecord`.`rent_id` = $rent_id";
    $result = mysqli_query($link, $sql);
    echo "<script>alert('您已刪除此筆資料!'); location.href = 'user-recordlist.php';</script>";
 
    mysqli_close($link);
?>